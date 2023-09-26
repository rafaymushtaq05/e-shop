@extends('Layout.master') <!-- Extend the master layout -->

@section('title', 'Detail Product') <!-- Set the page title -->

@section('style')
    
    <link href="/styles/user-nav.css" rel="stylesheet">
    <link href="/styles/banner.css" rel="stylesheet">
    <link href="/styles/detail.css" rel="stylesheet">
@endsection

@section('content')

<div class="container mt-5 product-detail">
    <div class="row">
        <div class="col-lg-6">
            <!-- Product Image -->
            <img src="{{ $product->image }}" class="product-image" alt="{{ $product->name }}">
        </div>
        <div class="col-lg-6">
            <!-- Product Details -->
            <h2 class="product-name">{{ $product->name }}</h2>
            <p class="product-price">Rs {{ $product->price }}</p>
            <p class="product-description">{{ $product->description }}</p>
            
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
        </div>
    </div>
</div>
    

@endsection


