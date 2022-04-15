<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\order\OrderController as OrderOrderController;
use App\Http\Controllers\Admin\Pizza\PizzaController;
use App\Http\Controllers\admin\user\OrderController as UserOrderController;
use App\Http\Controllers\admin\user\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\pizza\HomeController as PizzaHomeController;
use App\Http\Controllers\pizza\OrdersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\users\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard1');

//Register Route
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

//Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//logout route
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
//profile routes
Route::get('/users/{user:firstname}/profile', [ProfileController::class, 'index'])->name('users.profile');
Route::get('/users/{user:firstname}/profile/edit', [ProfileController::class, 'edit'])->name('users.profile.edit');
Route::put('/users/{user:firstname}/profile/edit', [ProfileController::class, 'updata'])->name('users.profile.edit');

//pizza routes
Route::get('/pizza/{pizza:name}', [OrderController::class, 'index'])->name('pizza');
Route::get('/pizza/{pizza:name}', [PizzaHomeController::class, 'index'])->name('pizza');
Route::get('/pizza/{pizza:name}/order', [PizzaHomeController::class, 'orderIndex'])->name('pizza.order');
//orders routes
Route::post('/pizza/{pizza:name}/order', [OrderController::class, 'palceOrder'])->name('pizza.order');
Route::get('/users/{user:firstname}/profile/orders', [OrderController::class, 'orders'])->name('users.profile.orders');
Route::get('/users/{user:firstname}/profile/orders/{order}', [OrderController::class, 'ordersDetails'])->name('users.profile.orders.details');
Route::delete('/orders/{order}/delete', [OrderController::class, 'deleteOrder'])->name('orders.delete');
Route::get('/orders/{order}/update', [OrderController::class, 'updateOrderPage'])->name('orders.update');
Route::put('/orders/{order}/update', [OrderController::class, 'updateOrder'])->name('orders.update');


Route::group([
    'middleware'=>'is_admin',
    'prefix'=>'admin'
],function(){

    //admin route here
    Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('users',[AdminController::class, 'showUsers'])->name('admin.users');
    Route::get('orders',[AdminController::class, 'showOrders'])->name('admin.orders');
    //pizza CRUD
    Route::get('pizza/add',[PizzaController::class, 'addPizzaPage'])->name('admin.add.pizza');
    Route::post('pizza/add',[PizzaController::class, 'addPizza'])->name('admin.add.pizza');
    Route::get('pizza/{pizza}/update',[PizzaController::class, 'updatePizzaPage'])->name('admin.update.pizza');
    Route::put('pizza/{pizza}/update',[PizzaController::class, 'updatePizza'])->name('admin.update.pizza');
    Route::delete('pizza/{pizza}/update',[PizzaController::class, 'deletePizza'])->name('admin.delete.pizza');
    //Users CRUD
    Route::get('users/{user}',[UserController::class, 'userDetails'])->name('admin.user');
    Route::get('users/{user}/update',[UserController::class, 'updateUserPage'])->name('admin.update.user');
    Route::put('users/{user}/update',[UserController::class, 'updateUser'])->name('admin.update.user');
    Route::delete('users/{user}/delete',[UserController::class, 'deleteUser'])->name('admin.delete.user');
    //Orders CRUD
    Route::get('users/{user}/{order}',[OrderOrderController::class, 'orderDetiles'])->name('admin.order.details');
    Route::get('users/{user}/{order}/update',[OrderOrderController::class, 'orderUpdatePage'])->name('admin.order.update');
    Route::put('users/{user}/{order}/update',[OrderOrderController::class, 'orderUpdate'])->name('admin.order.update');
    Route::delete('users/{user}/{order}/delete',[OrderOrderController::class, 'orderDelete'])->name('admin.order.delete');


});





