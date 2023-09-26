@extends('Layout.master') <!-- Extend the master layout -->

@section('title', 'Order') <!-- Set the page title -->

@section('style')
    <!-- Include your custom styles here -->
    <link href="/styles/nav.css" rel="stylesheet">
    <link href="/styles/order.css" rel="stylesheet">
    <link href="/styles/banner.css" rel="stylesheet">

   
@endsection
@section('content')
@include('partials.flashmsg')

<div class="containers">
<form method="post" action="{{ route('store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="phone_no">Phone Number:</label>
        <input type="tel" class="form-control" id="phone_no" name="phone_no" required>
    </div>

    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="payment_method">Payment Method:</label>
        <select class="form-control" id="payment_method" name="payment_method" required>
            <option value="credit_card">Credit Card</option>
           
            <option value="cash_on_delivery">Cash on Delivery</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Place Order</button>
</form>

</div>

@endsection
