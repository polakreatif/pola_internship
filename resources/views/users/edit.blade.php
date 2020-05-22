@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Edit Pengguna </title>
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
         <h1 class="m-0 text-dark">Edit Pengguna</h1>
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
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          Terjadi kesalahan ! atau data yang dimasukan tidak sesuai. Coba periksa kembali dan masukan data dengan benar.
        </div>
      @endif 
      @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
        <br/>
      @endif 

      <div class="card-body">
        <form enctype="multipart/form-data" action="{{ url('/users/'. $user->id) }}" method="POST">
          @csrf
          <input
            type="hidden"
            value="PUT"
            name="_method" />

          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Steve..." value="{{ $user->name }}">
            <small id="nameHelp" class="form-text text-muted">Nama max 199 karakter.</small>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="steve@gmail.com" value="{{ $user->email }}">
            <small id="emailHelp" class="form-text text-muted">Email unik max 199 karakter.</small>
          </div>
          <div class="form-group">
            <label for="phone">Nomer Hp / Whats App</label>
            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="08213317xxxx" value="{{ $user->phone }}">
            <small id="phoneHelp" class="form-text text-muted">Nomer Hp unik min 10 max 15 angka.</small>
          </div>
          <div class="form-group">
            <label for="address">Alamat</label>
            <textarea type="text" rows="5" name="address" class="form-control" id="address" placeholder="Jalan molek....">{{ $user->address }}</textarea>
            <small id="addressHelp" class="form-text text-muted">Alamat max 245 karakter.</small>
          </div>
          <br/>
           <a href="{{ url('/password/reset') }}">klik disini untuk mereset/mengganti password</a>
          <hr/>
           <label>Avatar</label>
           <div style="max-width: 350px;">
            <label>Avatar saat ini</label><br/>
            <img src="{{ asset('storage/'. $user->avatar ) }}" class="img-fluid" alt="Tentang Kami"/>
          </div>
          <br/>
          <div class="form-group">
            <label for="avatar"></label>
            <input type="file" class="form-control" name="avatar" id="avatar" accept="image/*">
            <small id="avatarHelp" class="form-text text-muted">Pilih gambar, Pilih gambar, max 2000 kb (2 MB), typefile: jpg,jpeg,png,bmp,tiff</small>
          </div>

          <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form> 
      </div>
    </div>
  </div>
@endsection