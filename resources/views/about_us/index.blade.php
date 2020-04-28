@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Tentang Kami </title>
@endsection

@section('nav')
  @include('comps.admin.navbar')

  @includeIf('comps.admin.sidebar', ['setting' => $setting])
@endsection

@section('footer')
  @include('comps.admin.footer')
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
        @includeIf('comps.about_us', ['about_us' => $about_us])
      </div>
    </div>
  </div>
@endsection