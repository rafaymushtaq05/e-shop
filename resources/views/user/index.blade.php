@include('partials.header')
@include('partials.user-navbar')

<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
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

@include('partials.footer')
