<?php

namespace App\Http\Controllers\pizza;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Pizza;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
    }
    //
    public function index(Pizza $pizza)
    {
        return view('pizza.index', ['pizza' => $pizza]);
    }
    
    public function orderIndex(Pizza $pizza)
    {
        return view('pizza.order', ['pizza' => $pizza]);
    }

}
