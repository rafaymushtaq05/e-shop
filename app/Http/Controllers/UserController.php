<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.index', ['products' => $products, 'heading' => 'Welcome To Abu Faisal International']);
    }

    public function show(Product $product)
{
    // dd($product);  
    return view('user.detailProduct', ['product' => $product, 'heading' => 'Product Detail']);
}
}
