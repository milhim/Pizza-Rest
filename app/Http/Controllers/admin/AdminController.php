<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Pizza;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }
    public function dashboard()
    {

        $pizzas=Pizza::all();
        return view('admin.dashboard', ['pizzas' => $pizzas]);
    }

    public function showUsers()
    {

        $users = User::where('is_admin',0)->get();

        return view('admin.users', ['users' => $users]);
    }

    public function showOrders()
    {

        $orders = Order::get();

        return view('admin.orders', ['orders' => $orders]);
    }
}
