@include('partials.header')
@include('partials.admin-navbar')

@include('partials.flashmsg')

<div class="container mt-5">
    <div class="row">
        @foreach($products as $index => $product)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">${{ $product['price'] }}</p>
                        <a href="{{ route('products.edit', $product->id) }}">
                            <button class="btn btn-primary mr-2">Edit</button>
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            
            @if (($index + 1) % 4 == 0 && $index != count($products) - 1)
                </div> <!-- End current row -->
                <div class="row mt-4"> <!-- Start a new row -->
            @endif
            
        @endforeach
    </div>
</div>

@extends('partials.footer')
