@extends('front.layouts.app')

@section('content')

<section class="hero-section position-relative text-center text-white">
  <img src="https://github.com/rosarianaputri/layla_school/blob/master/images/home-hero.jpg?raw=true" alt="Hero Image" class="img-fluid w-100 hero-img">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <h1>Welcome to Layla School</h1>
    <p>A school that inspires learning and kindness</p>
    <a href="about.html" class="btn btn-light mt-3">Learn More</a>
  </div>
</section>
  

<!-- section sambutan -->
 <!-- Principal's Message Section -->
<section id="principal-message" class="section-container">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Foto Kepala Sekolah -->
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="images/kepalasekolah.png" alt="Principal" class="principal-photo">
      </div>
      
      <!-- Teks Sambutan -->
      <div class="col-md-8">
        <h2 class="mb-3">Principal’s Message</h2>
        <p class="principal-text">
          Welcome to Layla School — a place where learning, creativity, and kindness grow together.  
          Every child has unique potential, and our mission is to help them discover and develop it 
          through meaningful education and supportive guidance.  
        </p>
        <p class="principal-text">
          We believe that education is not only about knowledge, but also about character, respect, 
          and compassion. Together, we prepare our students to face the future with confidence, wisdom, and heart.
        </p>
        <h6 class="text-end mt-4">— Principal of Layla School</h6>
      </div>

    </div>
  </div>
</section>

<!-- akhir section sambutan -->

<!-- section academic -->
 <!-- Academic Preview Section -->
<section id="home-academic" class="section-container text-center">
  <h2>Academic Excellence</h2>
  <p class="mx-auto" style="max-width:700px;">
    At Layla School, our academic program focuses on a balanced curriculum, 
    supported by experienced teachers and a well-structured school calendar 
    to ensure every student reaches their full potential.
  </p>

  <div class="row mt-4">
    <div class="col-md-4 mb-3">
      <i class="fas fa-book-open fa-3x mb-3" style="color:#6c5ce7;"></i>
      <h5>Comprehensive Curriculum</h5>
      <p>Structured lessons that nurture creativity and understanding.</p>
    </div>
    <div class="col-md-4 mb-3">
      <i class="fas fa-user-graduate fa-3x mb-3" style="color:#6c5ce7;"></i>
      <h5>Qualified Teachers</h5>
      <p>Our teachers are passionate about guiding students to excellence.</p>
    </div>
    <div class="col-md-4 mb-3">
      <i class="fas fa-calendar-days fa-3x mb-3" style="color:#6c5ce7;"></i>
      <h5>Organized Calendar</h5>
      <p>Academic year filled with engaging lessons and school activities.</p>
    </div>
  </div>


</section>

<!-- section akhir academic -->
<section class="section-container text-center" id="news">
  <h2>Latest News & Events</h2>
  <div class="row mt-2">
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="images/kelulusan.png" class="card-img-top" alt="Science Fair">
        <div class="card-body">
          <h5 class="card-title">Graduation Ceremony 2026   </h5>
          <p class="card-text">Layla School celebrated the success of its Class of 2026 with joy and pride. Students in navy gowns tossed their caps high, marking a new chapter filled with dreams and achievements. </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="images/tanaman.png" class="card-img-top" alt="Sports Day">
        <div class="card-body">
          <h5 class="card-title">Green School Project</h5>
          <p class="card-text">Layla School students and teachers joined hands to plant trees around the school garden. This project promotes environmental awareness, teamwork, and real action to create a greener future.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="images/sains.jpeg" class="card-img-top" alt="Art Exhibition">
        <div class="card-body">
          <h5 class="card-title">Science Fair & Innovation Day</h5>
          <p class="card-text">Students proudly presented their science projects in batik attire, showcasing creativity and teamwork through hands-on experiments that spark innovation and critical thinking.</p>
        </div>
      </div>
    </div>
  </div>
   <a href="information.html" class="btn btn-dark mt-3">Learn More</a>
</section>