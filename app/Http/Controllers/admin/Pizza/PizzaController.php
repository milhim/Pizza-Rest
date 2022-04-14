<?php

namespace App\Http\Controllers\Admin\Pizza;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
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
            $filename =  time().$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $pizza->src = $filename;
        }



        $pizza->info = $request->info;
        $pizza->size = $request->size;
        $pizza->price = $request->price;

        $pizza->save();

        return redirect(route('dashboard'));
    }
}
