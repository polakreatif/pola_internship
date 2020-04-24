@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | {{ $setting->app_slogan }} </title>
@endsection

@section('nav')
	@include('comps.admin.navbar')

	@includeIf('comps.admin.sidebar', [
		'setting' => $setting,
		'user_admin' => $user_admin
	])
@endsection

@section('footer')
  @include('comps.admin.footer')
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div>
      <div class="col-sm-6">
        
      </div>
    </div>
  </div>
@endsection