@extends('layouts.admin.dashboard')

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Jumbotron</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Jumbotron</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
	<div class="container">
		<div class="card">
			@if(session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
			@endif 

			<div class="card-body">
				<form enctype="multipart/form-data" action="/jumbotron/update" method="POST">
				  @csrf

				  <input
					type="hidden"
					value="PUT"
					name="_method" />

				  <div class="form-group">
				    <label for="title">Judul</label>
				    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" value="{{ $jumbotron->title }}">
				    <small id="titleHelp" class="form-text text-muted">Judul max 199 karakter.</small>
				  </div>
				  <div class="form-group">
				    <label for="caption">Caption</label>
				    <input type="text" name="caption" class="form-control" id="caption" value="{{ $jumbotron->caption }}">
				    <small id="captionHelp" class="form-text text-muted">Caption max 199 karakter.</small>
				  </div>
				  <br/>
				  <hr/>
				  <br/>

				  <div style="max-width: 350px;">
				  	<label>Gambar Sebelumnya</label>
				  	<img src="{{ asset('storage/'. $jumbotron->image ) }}" class="img-fluid" alt="jumbotron-img"/>
				  </div>
				  <br/>

				  <div class="form-group">
				    <label for="image"></label>
				    <input type="file" class="form-control" name="image" id="image">
				    <small id="imageHelp" class="form-text text-muted">Pilih gambar.</small>
				  </div>

				  <div class="form-group">
				    <label for="sumber_link">Sumber Link</label>
				    <input type="text" class="form-control" name="sumber_link" id="sumber_link" value="{{ $jumbotron->sumber_link }}">
				    <small id="sumberLinkHelp" class="form-text text-muted">Masukan sumber link  gambar, apabila ada.</small>
				  </div>
				  <div class="form-group">
				    <label for="sumber_label">Sumber Label</label>
				    <input type="text" class="form-control" name="sumber_label" id="sumber_label" value="{{ $jumbotron->sumber_label }}">
				    <small id="sumberLabelHelp" class="form-text text-muted">Masukan sumber label gambar, apabila ada.</small>
				  </div>
				  <br/>

				  <button type="submit" class="btn btn-primary">Kirim</button>
				</form>
			</div>
		</div>
	</div>
	<br/><br/>
@endsection