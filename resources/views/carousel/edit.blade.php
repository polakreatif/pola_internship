@extends('layouts.admin.dashboard')

@section('head')
	<title>Laundry Jone | Edit Carousel Promotion
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Carousel Promisi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ url('/carousel') }}">Carousel Promosi</a></li>
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
				<form enctype="multipart/form-data" action="{{ url('/carousel/'. $carousel->id ) }}" method="POST">
				  @csrf

				  <input
					type="hidden"
					value="PUT"
					name="_method" />

				  <div class="form-group">
				    <label for="title">Judul</label>
				    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Super Sale..." value="{{ $carousel->title }}" >
				    <small id="titleHelp" class="form-text text-muted">Judul max 199 karakter.</small>
				  </div>
				  <div class="form-group">
				    <label for="caption">Caption</label>
				    <input type="text" name="caption" class="form-control" id="caption" placeholder="Cuma hari ini aja..." value="{{ $carousel->caption }}">
				    <small id="captionHelp" class="form-text text-muted">Caption max 245 karakter.</small>
				  </div>
				  <hr/>
				   <label>Gambar</label>

				   <div style="max-width: 350px;">
				  	<label>Gambar Sebelumnya</label>
				  	<img src="{{ asset('storage/'. $carousel->image ) }}" class="img-fluid" alt="Carousel Promotion"/>
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
				  <input type="text" class="form-control" aria-label="sumber_link" aria-describedby="sumber_link" name="sumber_link" placeholder="domain.com" value="{{ $carousel->sumber_link }}">
				  
				</div>
				 	<small id="sumberLinkHelp" class="form-text text-muted">Masukan sumber link  gambar, apabila ada.</small>
				 
				 	<br/>
				  <div class="form-group">
				    <input type="text" class="form-control" name="sumber_label" id="sumber_label" placeholder="Free Pic etc" value="{{ $carousel->sumber_label }}">
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