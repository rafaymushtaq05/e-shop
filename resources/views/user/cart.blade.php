@extends('Layout.master')

@section('title', 'Cart') 

@section('style')
    
    <link href="/styles/nav.css" rel="stylesheet">
    <link href="/styles/banner.css" rel="stylesheet">
    <link href="/styles/cart.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <h2>Your Cart</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->product->name }}</td> 
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->product->price }}</td>
                <td>{{ $item->quantity * $item->product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
    <form action="order" method="get">
        @csrf
        <button type="submit" class="btn btn-order-now">Order Now</button>
    </form>
</div>
@endsection
