@extends('layouts.frontend.master')

@section('content')

  <section class="blog-us-details">
    <div class="container">
      <h1>{{ $articles->judul }}</h1>
      <hr class="my-4" id="line-blog">
      <div class="row">
              <img src="/storage/img/article/{{ $articles->gambar }}" class="card-img-top" alt="{{ $articles->judul }}">
              <p class="card-text details-isi">{!! $articles->isi !!}</p>
        </div>
    </div>
  </section>

@endsection