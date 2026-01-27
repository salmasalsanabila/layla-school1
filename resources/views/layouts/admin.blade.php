<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Layla School Admin')</title>

    <!-- ===== CSS DURALUX (WAJIB) ===== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>

<div id="app">
    @include('partials.admin.sidebar')

    <main class="nxl-container">
        @include('partials.admin.navbar')

        <div class="nxl-content">
            @yield('content')
        </div>
    </main>
</div>

<!-- ===== JS DURALUX (URUTAN PENTING) ===== -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>
