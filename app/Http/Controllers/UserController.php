<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.index', ['products' => $products, 'heading' => 'Home Page']);
    }

    public function show(Product $product)
{
    // dd($product);  // Debugging line
    return view('user.detailProduct', ['product' => $product, 'heading' => 'Product Detail']);
}
}
