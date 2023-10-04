@extends('Layout.admin-master')

@section('title', 'Add Product')

@section('style')
   
    <link href="/styles/form.css" rel="stylesheet">
    
    <link href="/styles/nav.css" rel="stylesheet">
    <link href="/styles/banner.css" rel="stylesheet">

@endsection

@section('content')
<div class="container mt-5">
        <h2 class="mb-4">Product Form</h2>
        <form method="post" action="{{route('products.store')}}">
            @method('post')
            @csrf
         
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="name" placeholder="Enter product title">
            </div>

            
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price">
            </div>

            
            <div class="form-group">
                <label for="desc">Description:</label>
                <textarea class="form-control" id="desc" name="description" rows="4" placeholder="Enter product description"></textarea>
            </div>

        
            <div class="form-group">
                <label for="image">Image URL:</label>
                <input type="url" class="form-control" id="image" name="image" placeholder="Enter image URL">
            </div>

            

          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
