@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Buat Pengguna </title>
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
         <h1 class="m-0 text-dark">Tambah Pengguna</h1>
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

			<div class="card-body">
				<form enctype="multipart/form-data" action="{{ route('users.store') }}" method="POST">
				  @csrf

				  <div class="form-group">
				    <label for="name">Nama</label>
				    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Steve...">
				    <small id="nameHelp" class="form-text text-muted">Nama max 199 karakter.</small>
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="steve@gmail.com">
				    <small id="emailHelp" class="form-text text-muted">Email unik max 199 karakter.</small>
				  </div>
				  <div class="form-group">
				    <label for="phone">Nomer Hp / Whats App</label>
				    <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="08213317xxxx">
				    <small id="phoneHelp" class="form-text text-muted">Nomer Hp unik min 10 max 15 angka.</small>
				  </div>
				  <div class="form-group">
				    <label for="address">Alamat</label>
				    <textarea type="text" rows="5" name="address" class="form-control" id="address" placeholder="Jalan molek...."></textarea>
				    <small id="addressHelp" class="form-text text-muted">Alamat max 245 karakter.</small>
				  </div>
				   <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" placeholder="08213317xxxx">
				    <small id="passwordHelp" class="form-text text-muted">Password min 8 karakter.</small>
				  </div>
				  <hr/>
				   <label>Avatar</label>

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