@extends('layouts.frontend.master')

@section('content')

  <section class="blog-us-details">
    <div class="container">
      <h1>{{ $careers->nama_career }}</h1>
      <hr class="my-4" id="line-blog">
      <div class="row">
              <img src="{{ asset('img/jobs.png') }}" class="card-img-top" alt="{{ $careers->nama_career }}">
              <div class="col-md-4">
                  <h5>Lokasi : </h5>
                  <h6 class="badge badge-primary badge-pill">{{ $careers->lokasi_career }}</h6>
                  <h5>Status :</h5>
                  <h6 class="badge badge-success badge-pill">{{ $careers->status }}</h6>
                  <h5>Deadline :</h5>
                  <h6 class="badge badge-danger badge-pill">{{ Carbon\Carbon::parse($careers->apllication_deadline)->format("d F Y") }}</h6>
              </div>
              <div class="col-md-7">
                  <h4>Deskripsi Pekerjaan</h4>
                  <p class="card-text details-isi">{!! $careers->desc_career !!}</p>
                  @if(date('Y-m-d H:i:s') <=  $careers->apllication_deadline )
                  <a href="/careers/{{ $careers->id_career }}/edit" class="btn btn-success" style="float: right;">Daftar</a>
                  @endif
              </div>              
        </div>
    </div>
  </section>
                
              

@endsection