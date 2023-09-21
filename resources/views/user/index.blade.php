@include('partials.header')
@include('partials.user-navbar')


<div class="container mt-5">
    <div class="row">
        @foreach($products as $index => $product)
        
        <div class="col-md-3">
        
            <div class="card">
            <a href="{{ route('products.show', $product->id) }}">
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                </a>
                <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rs {{ $product->price }}</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
               
            </div>
        @endforeach
    </div>
</div>




       
@extends('partials.footer')