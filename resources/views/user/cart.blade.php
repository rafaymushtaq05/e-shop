@extends('Layout.master') <!-- Extend the master layout -->

@section('title', 'Cart') <!-- Set the page title -->

@section('style')
    <!-- Include your custom styles here -->
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
</div>

<!-- <div class="container">
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
            
            <tr>
                <td>Taylor Hammer</td> 
                <td>1</td>
                <td>Rs 500</td>
                <td>Rs 500</td>
            </tr>
            
            
            
            
        </tbody>
    </table>
</div> -->

@endsection


