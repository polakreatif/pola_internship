@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Carousel Promotion </title>
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
          <h1 class="m-0 text-dark">Carousel Promotion</h1>
          <a class="btn btn-primary ml-3" href="{{ url('/carousel/create') }}">Tambah</a>
        </div>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Carousel Promosi</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
        @endif 
        
      <div class="card-body">
        

        @includeIf('comps.carousel', ['all_carousel' => $all_carousel])
        <hr/>
        <br/>
        <br/>

        <div class="table-responsive">
          <table class="table table-hover table-sm">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Caption</th>
                <th scope="col">Gambar</th>
                <th scope="col">Link Sumber Gambar</th>
                <th scope="col">Label Sumber Gambar</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($all_carousel as $carousel)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $carousel->title }}</td>
                  <td>{{ $carousel->caption }}</td>
                  <td>
                    <div style="max-width: 75px;">
                      <img src="{{ asset('storage/'. $carousel->image ) }}" class="img-fluid" alt="Carousel Promotion"/>
                    </div>
                  </td>
                  <td>{{ $carousel->sumber_link }}</td>
                  <td>{{ $carousel->sumber_label }}</td>
                  <td>
                    <a href="{{ url('/carousel/'.$carousel->id.'/edit') }}" class="btn btn-sm btn-outline-primary mx-1">Edit</a>
                    
                    <form
                      onsubmit="return confirm('Hapus carousel secara permanen ?')"
                      class="d-inline mx-1"
                      action="{{url('/carousel/'. $carousel->id)}}"
                      method="POST">
                      @csrf
                      <input
                      type="hidden"
                      name="_method"
                      value="DELETE">
                      <button
                      type="submit"
                      value="Delete"
                      class="btn btn-outline-danger btn-sm">Hapus</button>
                    </form>
                  </td>
                </tr>
              @endforeach
              
              
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
@endsection