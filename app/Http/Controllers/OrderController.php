<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function palceOrder(Pizza $pizza, Request $request)
    {

        $order =  Order::create([
            'user_id' => auth()->user()->id,
            'user_first_name' => $request->user_first_name,
            'user_last_name' => $request->user_last_name,
            'phone' => $request->phone,
            'billing_address' => $request->billing_address,
            'billing_email' => $request->billing_email,
        ]);

        $order->pizzas()->attach($pizza);
        return back()->with('order_placed_success', 'Your order has been placed');
    }

    public function orders()
    {
        $orders = Order::where('user_id', auth()->user()->id)->paginate(15);

        return view('orders.orders', ['orders' => $orders]);
    }


    public function ordersDetails(User $user, Order $order)
    {
        $pizzas = $order->pizzas;

        return view('orders.ordersdetails', ['pizzas' => $pizzas]);
    }

    public function deleteOrder(Order $order)
    {
        $order->delete();
        return back()->with('order_deleted', 'Your Order Has Been Deleted');
    }

    public function updateOrderPage(Order $order)
    {

        $pizza = $order->pizzas;

        return view('orders.editorder', [
            'order' => $order,
            'pizza' => $pizza
        ]);
    }
    public function updateOrder(Order $order, Request $request)
    {
        $order->user_first_name =   $request->user_first_name;
        $order->user_last_name =   $request->user_last_name;
        $order->phone =   $request->phone;
        $order->billing_address =   $request->billing_address;
        $order->billing_email =   $request->billing_email;
        $order->save();
        return redirect(route('users.profile.orders',auth()->user()));
    }
}
