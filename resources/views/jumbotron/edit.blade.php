@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Edit Jumbotron </title>
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
        <h1 class="m-0 text-dark">Edit Jumbotron</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ url('/jumbotron') }}">Jumbotron</a></li>
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
			@endif 

			<div class="card-body">
				<form enctype="multipart/form-data" action="{{ url('/jumbotron/update') }}" method="POST">
				  @csrf

				  <input
					type="hidden"
					value="PUT"
					name="_method" />

				  <div class="form-group">
				    <label for="title">Judul</label>
				    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" value="{{ $jumbotron->title }}" placeholder="Laundry Jone...">
				    <small id="titleHelp" class="form-text text-muted">Judul max 199 karakter.</small>
				  </div>
				  <div class="form-group">
				    <label for="caption">Caption</label>
				    <input type="text" name="caption" class="form-control" id="caption" value="{{ $jumbotron->caption }}" placeholder="Caption...">
				    <small id="captionHelp" class="form-text text-muted">Caption max 199 karakter.</small>
				  </div>
				  <hr/>
				   <label>Gambar</label>

				  <div style="max-width: 350px;">
				  	<label>Gambar Sebelumnya</label>
				  	<img src="{{ asset('storage/'. $jumbotron->image ) }}" class="img-fluid" alt="Gambar Jumbotron"/>
				  </div>
				  <br/>

				  <div class="form-group">
				    <label for="image"></label>
				    <input type="file" class="form-control" name="image" id="image" accept="image/*">
				    <small id="imageHelp" class="form-text text-muted">Pilih gambar, Pilih gambar, max 2000 kb (2 MB), typefile: jpg,jpeg,png,bmp,tiff</small>
				  </div>

				  	<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="sumber_link">https://</span>
					  </div>
					  <input type="text" class="form-control"value="{{ $jumbotron->sumber_link }}" aria-label="user_link" aria-describedby="sumber_link" name="sumber_link" placeholder="domain.com">
					  
					</div>
				 	<small id="sumberLinkHelp" class="form-text text-muted">Masukan sumber link  gambar, apabila ada.</small>
				 	<br/>
				  <div class="form-group">
				    <input type="text" class="form-control" name="sumber_label" id="sumber_label" value="{{ $jumbotron->sumber_label }}" placeholder="Free Pic etc">
				    <small id="sumberLabelHelp" class="form-text text-muted">Masukan sumber label gambar, apabila ada. Maksimal 199 karakter.</small>
				  </div>
				  <br/>

				  <button type="submit" class="btn btn-primary w-100" style="border-radius: 15px;">Simpan Perubahan</button>
				</form>
			</div>
		</div>
	</div>
	<br/><br/>
@endsection