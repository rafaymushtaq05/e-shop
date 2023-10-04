<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
{

    $cart = new Cart();
 
    $cart->product_id = $product->id;
    $cart->quantity = 1;
    $cart->save();

    return redirect()->back()->with('success', 'Product added to cart successfully!');
}

public function index()
{
    
 

    $cartItems = Cart::with('product')->get();

 
    $heading = 'Cart';

    return view('user.cart', compact('cartItems', 'heading'));
}




}
