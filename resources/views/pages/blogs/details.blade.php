@extends('layouts.frontend.master')

@include('layouts.frontend.navbar')

@section('content')

  <section class="blog-us-details">
    <div class="container">
      <h1>{{ $articles->judul }}</h1>
      <hr class="my-4" id="line-blog">
      <div class="row">
              <img src="https://assets.zoom.us/images/en-us/desktop/generic/video-not-working.PNG" class="card-img-top" alt="Website Development">
              <p class="card-text details-isi">{{ $articles->isi }}</p>
        </div>
    </div>
  </section>

@endsection