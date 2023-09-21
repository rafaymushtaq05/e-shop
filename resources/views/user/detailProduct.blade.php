@include('partials.header')
@include('partials.user-navbar')

<div class="container mt-5">
    <div class="card">
        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">${{ $product->price }}</p>
            <p class="card-text">{{ $product->description }}</p>
            <button class="btn btn-primary">Add to Cart</button>
        </div>
    </div>
</div>

@include('partials.footer')
