@extends('layouts.admin.dashboard')

@section('head')
  <title>Laundry Jone | Jumbotron</title>
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="d-flex">
          <h1 class="m-0 text-dark">Jumbotron</h1>
          <a class="btn btn-primary ml-3" href="{{ url('/jumbotron/edit') }}">Edit</a>
        </div>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Jumbotron</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1">
            <div>
              <h1>{{ $jumbotron->title }}</h1>
              @if(strlen($jumbotron->caption) > 0)
                <h2>
                  {{ $jumbotron->caption }} 
                </h2>
              @endif
              
              <a href="#" class="btn btn-success px-5 py-1"><i class="bx bxl-play-store"></i> Pesan Jasa</a>
            </div>
          </div>
          <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img">
            <img src="{{ asset('storage/'. $jumbotron->image) }}" class="img-fluid" alt="">
            @if(strlen($jumbotron->sumber_link) > 0)
              <div class="d-flex justify-content-end">
                <a href="https://{{ $jumbotron->sumber_link }}" target="_blank">{{ $jumbotron->sumber_label }}</a>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection