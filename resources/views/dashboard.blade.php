@extends('layouts.admin')

@section('head')
  @include('components.admin.head_dashboard')
@endsection

@section('script')
  @include('components.admin.script_dashboard')
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