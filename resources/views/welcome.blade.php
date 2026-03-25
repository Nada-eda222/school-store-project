@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <div class="card shadow-sm p-5">
        <h1 class="mb-4">Welcome to School Store</h1>
        <p class="lead mb-4">
            Manage your products easily with our CRUD system.  
            You can add, edit, and view products in a simple interface.
        </p>
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Go to Products</a>
    </div>
</div>
@endsection
