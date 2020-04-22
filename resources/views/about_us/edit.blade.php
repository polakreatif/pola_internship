@extends('layouts.admin.dashboard')

@section('head')
	<title>Laundry Jone | Edit Tentang Kami
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Tentang Kami</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ url('/about-us') }}">Tentang Kami</a></li>
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
					Terjadi kesalahan atau data yang dimasukan tidak sesuai. Coba lagi.
				</div>
			@endif
			@if(session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
			@endif 

			<div class="card-body">
				<form enctype="multipart/form-data" action="{{ url('/about-us/update') }}" method="POST">
				  @csrf

				  <input
					type="hidden"
					value="PUT"
					name="_method" />

				  <div class="form-group">
				    <label for="title">Judul</label>
				    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" value="{{ $about_us->title }}" placeholder="Siapa Kami ?">
				    <small id="titleHelp" class="form-text text-muted">Judul max 199 karakter.</small>
				  </div>
				  <div class="form-group">
				    <label for="description">Deskripsi</label>
				    <textarea type="text" rows="5" name="description" class="form-control" id="description" placeholder="Kami adalah....">{{ $about_us->description }}</textarea>
				    <small id="descriptionHelp" class="form-text text-muted">Deskripsi max 245 karakter.</small>
				  </div>
				  <hr/>
				   <label>Gambar</label>

				  <div style="max-width: 350px;">
				  	<label>Gambar Sebelumnya</label>
				  	<img src="{{ asset('storage/'. $about_us->image ) }}" class="img-fluid" alt="Tentang Kami"/>
				  </div>
				  <br/>

				  <div class="form-group">
				    <label for="image"></label>
				    <input type="file" class="form-control" name="image" id="image">
				    <small id="imageHelp" class="form-text text-muted">Pilih gambar.</small>
				  </div>

				  	<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="sumber_link">https://</span>
					  </div>
					  <input type="text" class="form-control"value="{{ $about_us->sumber_link }}" aria-label="sumber_link" aria-describedby="sumber_link" name="sumber_link" placeholder="domain.com">
					  
					</div>
				 	<small id="sumberLinkHelp" class="form-text text-muted">Masukan sumber link  gambar, apabila ada.</small>
				 	<br/>
				  <div class="form-group">
				    <input type="text" class="form-control" name="sumber_label" id="sumber_label" value="{{ $about_us->sumber_label }}" placeholder="Free Pic etc">
				    <small id="sumberLabelHelp" class="form-text text-muted">Masukan sumber label gambar, apabila ada. Maksimal 199 karakter.</small>
				  </div>
				  <br/>

				  <button type="submit" class="btn btn-primary">Kirim</button>
				</form>
			</div>
		</div>
	</div>
	<br/><br/>
@endsection