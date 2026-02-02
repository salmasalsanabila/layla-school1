<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layla School - Home</title>

  <!-- Bootstrap & FontAwesome CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.html">
      <img src="{{ asset('images/logo.png') }}" alt="Logo Layla School" class="navbar-logo me-2">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/ ">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="/academic">Academic</a></li>
        <li class="nav-item"><a class="nav-link" href="/facilities">Facilities</a></li>
        <li class="nav-item"><a class="nav-link" href="/student">Student Life</a></li>
        <li class="nav-item"><a class="nav-link" href="/information">Information</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- navbar -->
<!-- footer -->

<footer class="bg-dark text-white pt-5 pb-3">
  <div class="container">
    <div class="row">

      <!-- Sekolah Info -->
      <div class="col-md-4 mb-4">
        <h5 class="mb-3">Layla School</h5>
        <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>123 Learning Street, Education City, Country 12345</p>
        <p class="mb-2"><i class="fas fa-envelope me-2"></i><a href="mailto:info@laylaschool.com" class="text-white text-decoration-none">info@laylaschool.com</a></p>
        <p class="mb-0"><i class="fas fa-phone me-2"></i><a href="tel:+621234567890" class="text-white text-decoration-none">+62 123 4567 890</a></p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.html" class="text-white text-decoration-none">Home</a></li>
          <li><a href="about.html" class="text-white text-decoration-none">About Us</a></li>
          <li><a href="academic.html" class="text-white text-decoration-none">Academic</a></li>
          <li><a href="facilities.html" class="text-white text-decoration-none">Facilities</a></li>
          <li><a href="contact.html" class="text-white text-decoration-none">Contact Us</a></li>
        </ul>
      </div>

      <!-- Social Media -->
      <div class="col-md-4 mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white fs-5"><i class="fab fa-youtube"></i></a>
      </div>

    </div>

    <hr class="bg-light">

    <div class="text-center mt-3">
      &copy; 2026 Layla School. All Rights Reserved.
    </div>
  </div>
</footer>