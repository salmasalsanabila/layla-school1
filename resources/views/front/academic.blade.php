@extends('front.layouts.app')

@section('content')

<!-- Hero / Banner Section -->
<section class="text-center my-5">
  <h1>Academic</h1>
  <p>Curriculum, Teaching Staff, School Calendar</p>
</section>

<!-- Curriculum Section -->
<!-- Curriculum Section -->
<section id="curriculum" class="container my-5">
  <h2 class="text-center mb-4">Curriculum</h2>
  <div class="row g-4">
    <!-- Elementary -->
    <div class="col-md-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="images/sd.jpg" class="card-img-top" alt="Elementary School">
        <div class="card-body">
          <h5 class="card-title">Elementary</h5>
          <p class="card-text">Math, Science, English, Arts, PE</p>
        </div>
      </div>
    </div>

    <!-- Middle School -->
    <div class="col-md-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="images/smp1.jpeg" class="card-img-top" alt="Middle School">
        <div class="card-body">
          <h5 class="card-title">Middle School</h5>
          <p class="card-text">Math, Science, English, Social Studies, Computer</p>
        </div>
      </div>
    </div>

    <!-- High School -->
    <div class="col-md-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="images/smk1.jpeg" class="card-img-top" alt="High School">
        <div class="card-body">
          <h5 class="card-title">High School</h5>
          <p class="card-text">Advanced Math, Physics, Chemistry, Literature, Technology</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Faculty Section -->
<section id="faculty" class="container my-5">
  <p class="text-center mb-4 fw-bold">Teaching Staff</p>
  <div class="row justify-content-center g-4">
    <div class="col-md-4 text-center">
      <img src="images/jhon.jpg" class="faculty-img mb-2" alt="Mr. Jhon">
      <p>Mr. Jhon</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="images/sarah.jpg" class="faculty-img mb-2" alt="Ms. Sarah">
      <p>Ms. Sarah</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="images/emily.jpg" class="faculty-img mb-2" alt="Mrs. Emily">
      <p>Mrs. Emily</p>
    </div>
  </div>
</section>

