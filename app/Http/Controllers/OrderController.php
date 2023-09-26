<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create()
    {
        return view('user.order', ['heading'=> 'Order Here']);
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:15',
            'address' => 'required|string',
            'payment_method' => 'required|in:credit_card,paypal,cash_on_delivery',
        ]);

        $order = new Order();
        $order->name = $data['name'];
        $order->phone_no = $data['phone_no'];
        $order->address = $data['address'];
        $order->payment_method = $data['payment_method'];
        $order->save();
    
    
        return redirect()->back()->with('success', 'Order placed successfully!');
    }
}
