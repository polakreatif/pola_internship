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
        <h1 class="m-0 text-dark">Show Category</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Dasboard</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">

    <div class="card">
      <div class="row">
        <div class="col-12">

            <div class="row justify-content-center my-5">
              <div class="col-6">
                <div class="bg-white shadow p-3">
                  <div
                    style="
                      background-image: url('{{ asset('/media/03.jpg') }}'); 
                      background-color: #fff; 
                      background-position: center; 
                      background-size: contain; 
                      background-repeat: no-repeat; 
                      width: 100%; 
                      height: 175px;
                    "
                  >
                  </div>
                  <div class="text-center my-3">
                    <h3> Category Name </h3>
                  </div>
                  <div class="d-flex justify-content-center">
                    <a href="/categories/id/edit" class="btn btn-sm btn-outline-primary mx-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button class="btn btn-sm btn-outline-danger mx-1">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </div>
            
                
              </div>
            
            </div>

          

        </div>
      </div> <!-- Close Row -->
    </div><!-- Close Card -->
  </div>
@endsection