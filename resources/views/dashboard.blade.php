<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Chart.js for Simple Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Custom Gradients for Millennial Vibes */
        .sidebar-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .bg-gradient-blue { background: linear-gradient(135deg, #007bff, #6610f2); }
        .bg-gradient-green { background: linear-gradient(135deg, #28a745, #20c997); }
        .bg-gradient-purple { background: linear-gradient(135deg, #6f42c1, #e83e8c); }
        .bg-gradient-pink { background: linear-gradient(135deg, #dc3545, #fd7e14); }
    </style>
</head>
<body class="bg-light font-sans fade-in">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar-bg text-white collapse show" style="min-height: 100vh;">
                <div class="position-sticky">
                    <div class="d-flex align-items-center justify-content-between p-3">
                        <h5 class="mb-0">Layla School</h5>
                        <button class="btn btn-link text-white d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="true">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <ul class="nav flex-column mt-3">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('dashboard') }}">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('profile.edit') }}">
                                <i class="fas fa-user me-2"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item mt-3">
                            <small class="text-muted px-3 text-uppercase">Content Management</small>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-info-circle me-2"></i> About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-graduation-cap me-2"></i> Academic
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-building me-2"></i> Facilities
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-users me-2"></i> Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-bullhorn me-2"></i> Information
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-envelope me-2"></i> Contact
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <small class="text-muted px-3 text-uppercase">News</small>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-book me-2"></i> Library
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-fair me-2"></i> Fair
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-white" href="{{ route('content.index') }}">
                                <i class="fas fa-palette me-2"></i> Art
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome to Dashboard!</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <span class="text-muted">Hi, {{ Auth::user()->name ?? 'Admin' }}</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <!-- Overview Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card text-white bg-gradient-blue card-hover">
                            <div class="card-body">
                                <i class="fas fa-eye fa-2x mb-2"></i>
                                <h5 class="card-title">Page Views</h5>
                                <p class="card-text fs-4">12,345</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-gradient-green card-hover">
                            <div class="card-body">
                                <i class="fas fa-users fa-2x mb-2"></i>
                                <h5 class="card-title">Students</h5>
                                <p class="card-text fs-4">1,234</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-gradient-purple card-hover">
                            <div class="card-body">
                                <i class="fas fa-newspaper fa-2x mb-2"></i>
                                <h5 class="card-title">News Posts</h5>
                                <p class="card-text fs-4">56</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-gradient-pink card-hover">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x mb-2"></i>
                                <h5 class="card-title">Messages</h5>
                                <p class="card-text fs-4">89</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Traffic Overview</h5>
                        <canvas id="trafficChart"></canvas>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quick Actions</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-edit fa-2x mb-2"></i><br>Edit Profile
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="#" class="btn btn-success w-100">
                                    <i class="fas fa-plus fa-2x mb-2"></i><br>Add News
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="#" class="btn btn-info w-100">
                                    <i class="fas fa-cog fa-2x mb-2"></i><br>Settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js Script -->
    <script>
        const ctx = document.getElementById('trafficChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Page Views',
                    data: [1200, 1900, 3000, 5000, 2000, 3000],
                    borderColor: '#667eea',
                    backgroundColor: 'rgba(102, 126, 234, 0.2)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true }
                }
            }
        });
    </script>
</body>
</html>