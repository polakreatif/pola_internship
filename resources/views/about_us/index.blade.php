@extends('layouts.admin.dashboard')

@section('head')
  <title>Laundry Jone | Tentang Kami</title>
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="d-flex">
          <h1 class="m-0 text-dark">Tentang Kami</h1>
          <a class="btn btn-primary ml-3" href="{{ url('/about-us/edit') }}">Edit</a>
        </div>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Tentang Kami</li>
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
          <div class="col-12 col-sm-8 col-lg-6 text-center">
            <img class="img-fluid" src="{{ asset('storage/'. $about_us->image) }}">
            @if(strlen($about_us->sumber_link) > 0)
              <div class="d-flex justify-content-start">
                <a href="https://{{ $about_us->sumber_link }}" target="_blank">{{ $about_us->sumber_label }}</a>
              </div>
            @endif
          </div>
          <div class="col-12 col-sm-8 col-lg-6 d-flex flex-column align-items-stretch  justify-content-center">
              <div class="text-center">
                @if(strlen($about_us->title) > 0)
                  <h2>{{ $about_us->title }}</h2>
                @endif
                <p>{{ $about_us->description }}</p>
              </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection