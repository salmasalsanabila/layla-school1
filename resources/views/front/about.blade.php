@extends('front.layouts.app')

@section('content')

@php
$principal = \App\Models\Content::where('menu','about')->where('section','principal')->first();
$vision    = \App\Models\Content::where('menu','about')->where('section','vision')->first();
$mission  = \App\Models\Content::where('menu','about')->where('section','mission')->first();
$history  = \App\Models\Content::where('menu','about')->where('section','history')->first();
$orgs     = \App\Models\Content::where('menu','about')->where('section','org')->get();
@endphp

<!-- Principal Section -->
<section class="container my-5 pt-5">
  <h2>{{ $principal->title ?? 'Principal’s Message' }}</h2>
  @if($principal && $principal->image)
    <img src="{{ asset($principal->image) }}" class="mb-3" width="200">
  @endif
  <p class="lead mt-3">{{ $principal->body ?? 'Content not set yet.' }}</p>
</section>

<!-- Vision & Mission -->
<section class="container my-5">
  <h2>Vision & Mission</h2>
  <div class="row mt-4">

    <div class="col-md-6 mb-4">
      <h3>{{ $vision->title ?? 'Our Vision' }}</h3>
      <p>{{ $vision->body ?? '-' }}</p>
    </div>

    <div class="col-md-6">
      <h3>{{ $mission->title ?? 'Our Mission' }}</h3>
      <p>{!! nl2br(e($mission->body ?? '-')) !!}</p>
    </div>

  </div>
</section>

<!-- History -->
<section class="container my-5">
  <h2>{{ $history->title ?? 'Our History' }}</h2>
  @if($history && $history->image)
    <img src="{{ asset($history->image) }}" class="img-fluid mb-3">
  @endif
  <p>{{ $history->body ?? '-' }}</p>
</section>

<!-- Organization Structure -->
<section class="section-container text-center my-5">
  <h2>Organizational Structure</h2>
  <p>Meet the leadership team of Layla School.</p>

  <div class="row mt-4">
    @foreach($orgs as $o)
    <div class="col-md-3 mb-4">
      <div class="card p-3 shadow-sm">
        @if($o->image)
          <img src="{{ asset($o->image) }}" class="card-img-top rounded-circle mx-auto mt-2"
               style="width:120px;height:120px;object-fit:cover;">
        @endif
        <div class="card-body">
          <h5 class="card-title mb-0">{{ $o->title }}</h5>
          <p class="text-muted">{{ $o->body }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

@endsection
