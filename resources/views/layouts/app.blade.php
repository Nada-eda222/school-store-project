<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <header class="bg-dark text-white p-3 mb-4">
        <div class="container">
            <h1>School Store</h1>
            <nav>
                <a href="{{ route('products.index') }}" class="btn btn-light btn-sm">Products</a>
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">Add Product</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="bg-light text-center p-3 mt-4">
        <p>&copy; {{ date('Y') }} School Store BY:--NADA REDA</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
