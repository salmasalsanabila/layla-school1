@extends('front.layouts.app')

@section('content')

<!-- Hero Section -->
<section class="text-center my-5">
  <h1>Information</h1>
  <p>News, Announcements, Events</p>
</section>

<section id="news" class="container my-5">
  <h2 class="text-center mb-4">News & Articles</h2>
  <div class="row g-4">

    <!-- News Card 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/news/liblary.jpg" class="card-img-top" alt="News 1">
        <div class="card-body">
          <h5 class="card-title">New Library Opening</h5>
          <p class="card-text">The school inaugurated a new modern library with state-of-the-art facilities.</p>
        <a href="/news-library" class="btn btn-primary btn-sm">
    Read More
</a>

        </div>
      </div>
    </div>

    <!-- News Card 2 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/news/sainssss.jpg" class="card-img-top" alt="News 2">
        <div class="card-body">
          <h5 class="card-title">Science Fair 2026</h5>
          <p class="card-text">Students showcased innovative science projects in the annual school fair.</p>
         <a href="{{ url('/newsfair') }}" class="btn btn-primary btn-sm">
    Read More
</a>

        </div>
      </div>
    </div>

    <!-- News Card 3 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/news/artttttt.jpg" class="card-img-top" alt="News 3">
        <div class="card-body">
          <h5 class="card-title">Student Art Exhibition</h5>
          <p class="card-text">Creative artworks by students were displayed for the community to enjoy.</p>
          <a href="{{ url('/news-art') }}" class="btn btn-primary btn-sm">
    Read More
</a>
        </div>
      </div>
    </div>

  </div>
</section>
>

<!-- Announcement Section -->
<section id="announcement" class="container my-5">
  <h2 class="text-center mb-4">Announcements</h2>

  <div class="announcement-item mb-4 p-3 rounded shadow-sm" style="background-color: #f8f9ff;">
    <h5 class="mb-1">Holiday Notice</h5>
    <small class="text-muted">1 February 2026</small>
    <p class="mb-0">School will be closed on 1st February for holiday.</p>
  </div>

  <div class="announcement-item mb-4 p-3 rounded shadow-sm" style="background-color: #f8f9ff;">
    <h5 class="mb-1">Science Fair Registration</h5>
    <small class="text-muted">28 January 2026</small>
    <p class="mb-0">Registration for Science Fair 2026 starts on 28th January.</p>
  </div>

  <div class="announcement-item mb-4 p-3 rounded shadow-sm" style="background-color: #f8f9ff;">
    <h5 class="mb-1">Canteen Menu Update</h5>
    <small class="text-muted">30 January 2026</small>
    <p class="mb-0">New canteen menu available from next week.</p>
  </div>

</section>



<!-- Event Section -->
<section id="event" class="container my-5">
  <h2 class="text-center mb-4">Events</h2>

  <div class="event-item mb-4 p-3 rounded shadow-sm" style="background-color: #e6f7ff;">
    <h5 class="mb-1">Annual Sports Day</h5>
    <small class="text-muted">15 February 2026</small>
    <p class="mb-0">Students will participate in various sports competitions across all grades.</p>
  </div>

  <div class="event-item mb-4 p-3 rounded shadow-sm" style="background-color: #e6f7ff;">
    <h5 class="mb-1">Art & Music Festival</h5>
    <small class="text-muted">20 March 2026</small>
    <p class="mb-0">A celebration of students’ creativity in art and music, open to all parents and community.</p>
  </div>

  <div class="event-item mb-4 p-3 rounded shadow-sm" style="background-color: #e6f7ff;">
    <h5 class="mb-1">Science Fair 2026</h5>
    <small class="text-muted">28 April 2026</small>
    <p class="mb-0">Exhibition of innovative student science projects in the annual school fair.</p>
  </div>

</section>
