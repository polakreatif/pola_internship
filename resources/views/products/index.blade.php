@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Produk </title>
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
          <h1 class="m-0 text-dark">Produk</h1>
          <a class="btn btn-primary ml-3" href="{{ url('/products/create') }}">Tambah</a>
        </div>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Produk</li>
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
        <br/>
      @endif 
        
      <div class="card-body">
        
        <div class="table-responsive">
          <table class="table table-hover table-sm">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Slug/Url</th>
                <th scope="col">Harga</th>
                <th scope="col">Tipe</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Image</th>
                <th scope="col">Link Sumber Gambar</th>
                <th scope="col">Label Sumber Gambar</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->slug }}</td>
                  <td>RP. {{ $product->price }}</td>
                  <td>
                    @if($product->type == 1)
                      <button class="btn btn-sm btn-primary">Express</button>
                    @elseif($product->type == 2)
                      <button class="btn btn-sm btn-light">Reguler</button>
                    @else
                      <button class="btn btn-sm btn-light">Belum ditentukan</button>
                    @endif
                  </td>
                  <td>{{ $product->description }}</td>
                  <td>
                    <div style="max-width: 75px;">
                      <img src="{{ asset('storage/'. $product->image ) }}" class="img-fluid" alt="products Promotion"/>
                    </div>
                  </td>
                  <td>{{ $product->sumber_link }}</td>
                  <td>{{ $product->sumber_label }}</td>
                  <td>
                    <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-sm btn-outline-primary mx-1">Edit</a>
                    
                    <form
                      onsubmit="return confirm('Hapus produk secara permanen ?')"
                      class="d-inline mx-1"
                      action="{{url('/products/'. $product->id)}}"
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
                    
                </tr>
              @endforeach
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection