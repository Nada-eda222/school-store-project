@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-3">Product Details</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title">{{ $product->name }}</h4>
            <p class="card-text"><strong>ID:</strong> {{ $product->id }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
            <p class="card-text"><strong>Image:</strong> {{ $product->image }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit Product</a>
    </div>
</div>
@endsection
