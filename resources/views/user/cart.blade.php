@include('partials.header')
@include('partials.user-navbar')

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
                <td>Product Name</td> <!-- Assuming you have a relationship with a Product model -->
                <td>{{ $item->quantity }}</td>
                <td>Price</td>
                <td>{{ $item->quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@include('partials.footer')
