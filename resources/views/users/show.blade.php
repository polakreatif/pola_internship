@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Pengaturan </title>
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
        <h1 class="m-0 text-dark">Pengguna</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ url('/users') }}">Pengguna</a></li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      
      <div class="card-body">
        <div style="max-width: 350px;">
        <img src="{{ asset('storage/'. $user->avatar ) }}" class="img-fluid shadow" alt="Tentang Kami"/>
      </div><br/>

        Nama : {{ $user->name }}<br/>
        Email : {{ $user->email }}<br/>
        Phone : {{ $user->phone }}<br/>
        Address : {{ $user->address }}<br/>

      </div>
    </div>
  </div>
@endsection