@extends('layouts.frontend.master')

@section('content')

  <section class="blog-us-details">
    <div class="container">
      <h1>{{ $career->nama_career }}</h1>
      <hr class="my-4" id="line-blog">
      <div class="row">
              <img src="{{ asset('img/jobs.png') }}" class="card-img-top" alt="{{ $career->nama_career }}">
              <div class="col-md-4">
                  <h5>Kode Pendaftaran : </h5>
                  <h6 class="badge badge-info badge-pill">{{ $career->id_career }}</h6>
                  <h5>Lokasi : </h5>
                  <h6 class="badge badge-primary badge-pill">{{ $career->lokasi_career }}</h6>
                  <h5>Status :</h5>
                  <h6 class="badge badge-success badge-pill">{{ $career->status }}</h6>
                  <h5>Deadline :</h5>
                  <h6 class="badge badge-danger badge-pill">{{ $career->apllication_deadline }}</h6>
              </div>
              <div class="col-md-8">
                  <h4>Deskripsi Pekerjaan</h4>
                  <p class="card-text details-isi">{!! $career->desc_career !!}</p>
                  @if(date('Y-m-d H:i:s') <=  $career->apllication_deadline )
                  <a href="/careers/create" class="btn btn-success">Daftar</a>
                  @endif
              </div>              
        </div>
    </div>
  </section>

@endsection