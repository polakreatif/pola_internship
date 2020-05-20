@extends('layouts.frontend.master')

@section('content')

  <section class="blog-us-details">
    <div class="container">
      <h1>About Us</h1>
      <hr class="my-4" id="line-blog">
      <div class="row">
              <img src="/storage/img/company/{{ $companies->about_image }}" style="width: 1200px; height: 600px;" alt="{{ $companies->nama_company }}">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <p>Tahun Berdiri : <br>
                    {{ Carbon\Carbon::parse($companies->tanggal_dibuat)->format("d F Y") }}</p>
                  <p>Email : <br>
                    {{ $companies->email }}</p>
                  <p>Whatsapp : <br>
                    {{ $companies->whatsapp }}</p>
                  <p>Instagram : <br>
                    {{ $companies->instagram }}</p>
                  <p>Facebook : <br>
                    {{ $companies->facebook }}</p>
                  <p>twitter : <br>
                    {{ $companies->twitter }}</p>
                  <p>youtube : <br>
                    {{ $companies->youtube }}</p>
              </div>
              <div class="col-md-7">
                  <h2><center>{{ $companies->nama_company }}</center></h2>
                  <center><img src="/storage/img/company/{{ $companies->logo }}" style="width: 500px; height: 300px;" alt="{{ $companies->nama_company }}"></center>
                  <p class="card-text details-isi">{!! $companies->about !!}</p>
                  <h4>Slogan Kami</h4>
                  <p>{{ $companies->slogan }}</p>
              </div>         
              <div class="col-md-1"></div>     
        </div>
    </div>
  </section>

@endsection