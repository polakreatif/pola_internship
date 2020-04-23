@extends('layouts.admin.dashboard')

@section('head')
  <title>Laundry Jone | Pengaturan</title>
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pengaturan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Pengaturan</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            Terjadi kesalahan, atau data yang dimasukan tidak sesuai. Coba lagi.
            {{ $errors->first('email') }}
          </div>
        @endif
        @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
        @endif 

        <form enctype="multipart/form-data" action="{{ url('/setting/update') }}" method="POST">
          @csrf

          <input
          type="hidden"
          value="PUT"
          name="_method" />

          <label>Aplikasi</label>
          <div class="form-group">
            <label for="app_name">Nama Aplikasi</label>
            <input type="text" class="form-control" name="app_name" id="app_name" aria-describedby="app_nameHelp" value="{{ $setting->app_name }}" placeholder="Laundry RUUM">
            <small id="app_nameHelp" class="form-text text-muted">Nama Aplikasi max 199 karakter.</small>
          </div>
          <div class="form-group">
            <label for="app_slogan">Slogan Aplikasi</label>
            <input type="text" class="form-control" name="app_slogan" id="app_slogan" aria-describedby="app_sloganHelp" value="{{ $setting->app_slogan }}" placeholder="Make Your Clothes and You Happy...">
            <small id="app_sloganHelp" class="form-text text-muted">Slogan Aplikasi max 199 karakter.</small>
          </div>
          <hr/>
          <label>Akun</label>
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{ $user_admin->name }}" placeholder="Super Admin...">
            <small id="nameHelp" class="form-text text-muted">Nama Akun max 199 karakter.</small>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ $user_admin->email }}" placeholder="admin@domain.com">
            <small id="emailHelp" class="form-text text-muted">Email Akun max 199 karakter.</small>
          </div>
          <a href="{{ url('/password/reset') }}">klik disini untuk mereset/mengganti password</a>
          <br/><br/>
          <button class="btn btn-primary w-100" style="border-radius: 15px;"> Simpan Perubahan</button>
        </form>

      </div>
    </div>
  </div>
@endsection