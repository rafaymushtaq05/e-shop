<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
{
    // Logic to add the product to the cart
    // You might want to associate the product with a logged-in user, 
    // so you'll need to handle authentication as well.

    // For this example, let's assume you have a Cart model
    $cart = new Cart();
 
    $cart->product_id = $product->id;
    $cart->quantity = 1;  // or any desired default value
    $cart->save();

    return redirect()->back()->with('success', 'Product added to cart successfully!');
}

public function index()
{
    
    // $cartItems = Cart::all();
    // $heading = 'Cart';
 
    // return view('user.cart', compact('cartItems', 'heading'));

    $cartItems = Cart::with('product')->get();

    // If you want to access the product's name and price for a specific cart item, you'd do something like this:
    // $productName = $cartItems[0]->product->name;
    // $productPrice = $cartItems[0]->product->price;

    $heading = 'Cart';

    return view('user.cart', compact('cartItems', 'heading'));
}




}
