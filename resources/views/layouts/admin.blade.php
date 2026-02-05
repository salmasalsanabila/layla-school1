<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Layla School Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .sidebar-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .nav-link.active {
            background: rgba(255,255,255,0.2);
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <nav class="col-md-3 col-lg-2 sidebar-bg text-white p-0">
            <div class="p-3 fw-bold fs-5">Layla School</div>

            <ul class="nav flex-column px-2">

                <li class="nav-item mb-1">
                    <a class="nav-link text-white {{ request()->is('dashboard') ? 'active' : '' }}"
                       href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                </li>

                <small class="text-uppercase px-3 mt-3">Content</small>

                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('content*') ? 'active' : '' }}"
                       href="{{ route('content.index') }}">
                        <i class="fas fa-info-circle me-2"></i> About / Pages
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-graduation-cap me-2"></i> Academic
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-building me-2"></i> Facilities
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-users me-2"></i> Student
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-bullhorn me-2"></i> Information
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-envelope me-2"></i> Contact
                    </a>
                </li>

            </ul>
        </nav>

        <!-- MAIN CONTENT -->
        <main class="col-md-9 col-lg-10 px-4">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                <h4>@yield('title', 'Admin Panel')</h4>

                <div>
                    Hi, {{ Auth::user()->name ?? 'Admin' }}

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button class="btn btn-sm btn-danger ms-2">Logout</button>
                    </form>
                </div>
            </div>

            <!-- PAGE CONTENT -->
            <div class="py-4">
                @yield('content')
            </div>

        </main>

    </div>
</div>

</body>
</html>
