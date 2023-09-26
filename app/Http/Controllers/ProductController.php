<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.index', ['products' => $products, 'heading' => 'Welcome To Admin Panel']);
    }

    function addProduct(){
        return view('admin.addproduct', ['heading' => 'Add Product']);
    }

   


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.editProduct', ['product' => $product, 'heading' => 'Edit Product']);
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable',
            'image' => 'nullable|url'
        ]);

        $product = Product::findOrFail($id);
        
        $product->fill([
            'name' => $request->input("name"),
            'price' => $request->input("price"),
            'description' => $request->input("description"),
            'image' => $request->input("image"),
        ])->save();

        return redirect()->route('admin.index')->with('message', 'Product updated successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable',
            'image' => 'nullable|url'
        ]);

        $product = new Product([
            'name' => $request->input("name"),
            'price' => $request->input("price"),
            'description' => $request->input("description"),
            'image' => $request->input("image"),
        ]);

        $product->save();

        return redirect()->route('admin.index')->with('success', 'Product created successfully!');
    }

    public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('admin.index')->with('message', 'Product deleted successfully!');
}

}
