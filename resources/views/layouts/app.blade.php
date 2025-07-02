<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CV Hajera Jewa')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
        }
        section {
            padding: 80px 0;
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
    </style>

    @stack('styles')
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="100">

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 bg-dark text-warning">
        <small>© 2025 Hajera Jewa. All rights reserved.</small>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
