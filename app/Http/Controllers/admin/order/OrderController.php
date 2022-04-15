<?php

namespace App\Http\Controllers\admin\order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Pizza;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function orderDetiles(User $user, Order $order)
    {
        $pizzas=$order->pizzas;
        return view('admin.orders.orderdetailes',['pizzas'=>$pizzas]);
    }

    public function orderUpdatePage(User $user, Order $order)
    {
        return view('admin.orders.editorder', [
            'order' => $order
        ]);
    }
    public function orderUpdate( User $user,Order $order,Request $request)
    {

        $order->update($request->all());
        return back()->with('order_update_success','Order has been updated');

    }
    public function orderDelete(User $user, Order $order)
    {
        $order->delete();
        return back()->with('order_delete_success','Order has been deleted');

    }

}
