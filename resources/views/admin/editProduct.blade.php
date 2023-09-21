@include('partials.header')
@include('partials.admin-navbar')

<div class="container mt-5">
    <h2 class="mb-4">Edit Product</h2>

    <form method="post" action="{{ route('products.update', $product->id) }}">
        @method('put')
        @csrf

        <!-- Title Input -->
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="name" value="{{ $product->name }}" placeholder="Enter product title">
        </div>

        <!-- Price Input -->
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Enter product price">
        </div>

        <!-- Description Textarea -->
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea class="form-control" id="desc" name="description" rows="4" placeholder="Enter product description">{{ $product->description }}</textarea>
        </div>

        <!-- Image URL Input -->
        <div class="form-group">
            <label for="image">Image URL:</label>
            <input type="url" class="form-control" id="image" name="image" value="{{ $product->image }}" placeholder="Enter image URL">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@include('partials.footer')
