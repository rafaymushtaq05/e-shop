@extends('Layout.admin-master')

@section('title', 'Admin Dashboard')

@section('style')
    
    <link href="/styles/admin-index.css" rel="stylesheet">
    <link href="/styles/flashmsg.css" rel="stylesheet">
    <link href="/styles/nav.css" rel="stylesheet">
    <link href="/styles/banner.css" rel="stylesheet">



@endsection

@section('content')
    @include('partials.flashmsg')

    <div class="container mt-2">
        <div class="row">
            @foreach($products as $index => $product)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">Rs {{ $product['price'] }}</p>
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
                    </div> 
                    <div class="row mt-4"> 
                @endif
                
            @endforeach
        </div>
    </div>

    
@endsection
