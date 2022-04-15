<?php

namespace App\Http\Controllers\Admin\Pizza;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }
    public function addPizzaPage()
    {

        return view('admin.pizza.add');
    }
    public function addPizza(Request $request)
    {

        $pizza = new Pizza();
        $pizza->name = $request->name;
        if ($request->file('src')) {
            $file = $request->file('src');
            $filename =  time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $pizza->src = $filename;
        }



        $pizza->info = $request->info;
        $pizza->size = $request->size;
        $pizza->price = $request->price;

        $pizza->save();

        return redirect(route('dashboard'))->with('pizza_add_success','pizza has been added');
    }
    public function updatePizzaPage(Pizza $pizza)
    {
        return view('admin.pizza.updatepizza',['pizza'=>$pizza]);
    }

    public function updatePizza(Request $request, Pizza $pizza)
    {
        $pizza->name = $request->name;
        if ($request->file('src')) {
            $file = $request->file('src');
            $filename =  time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $pizza->src = $filename;
        }

        $pizza->info = $request->info;
        $pizza->size = $request->size;
        $pizza->price = $request->price;

        $pizza->save();

        return redirect(route('dashboard'))->with('pizza_update_success','pizza has been updated');
    }

    public function deletePizza(Pizza $pizza){

        Pizza::destroy($pizza->id);
        return redirect(route('dashboard'))->with('pizza_delete_success','pizza has been deleted');

    }
}
