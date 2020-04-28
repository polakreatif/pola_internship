@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Edit Produk </title>
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
        <h1 class="m-0 text-dark">Edit Produk</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ url('/products') }}">Produk</a></li>
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
				<form enctype="multipart/form-data" action="{{ url('/products/'.$product->id) }}" method="POST">
				  @csrf

				  <input
					type="hidden"
					value="PUT"
					name="_method" />

				  <div class="form-group">
				    <label for="name">Nama</label>
				    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{ $product->name }}" placeholder="Laundry Kiloan...">
				    <small id="nameHelp" class="form-text text-muted">Nama max 199 karakter.</small>
				  </div>
				  
				  <div class="row">
					  <div class="col-12 col-sm-12 col-md-6 col-lg-4">
					  	<div class="form-group">
						    <label for="price">Harga</label>
						    <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}" placeholder="1999">
						    <small id="priceHelp" class="form-text text-muted">Harga isi dengan Angka</small>
						</div>
					  </div>
				  </div>
				  <div class="form-group">
				    <label for="type">Tipe</label>
				    <select class="form-control" id="type" name="type">
				    	@if($product->type == 1)
				    		<option value="0" ></option>
						    <option value="1" selected>Express</option>
						    <option value="2" >Reguler</option>
				    	@elseif($product->type == 2)
				    		<option value="0" ></option>
						    <option value="1" >Express</option>
						    <option value="2" selected>Reguler</option>
				    	@else
				    		<option value="0" selected></option>
						    <option value="1" >Express</option>
						    <option value="2" >Reguler</option>
				    	@endif
				      
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="description">Deskripsi</label>
				    <textarea type="text" rows="5" name="description" class="form-control" id="description" placeholder="Kami adalah....">{{ $product->description }}</textarea>
				    <small id="descriptionHelp" class="form-text text-muted">Deskripsi max 245 karakter.</small>
				  </div>
				  <hr/>
				   <label>Gambar</label>

				  <div style="max-width: 350px;">
				  	<label>Gambar Sebelumnya</label>
				  	<img src="{{ asset('storage/'. $product->image ) }}" class="img-fluid" alt="Gambar Produk"/>
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
					  <input type="text" class="form-control"value="{{ $product->sumber_link }}" aria-label="user_link" aria-describedby="sumber_link" name="sumber_link" placeholder="domain.com">
					  
					</div>
				 	<small id="sumberLinkHelp" class="form-text text-muted">Masukan sumber link  gambar, apabila ada.</small>
				 	<br/>
				  <div class="form-group">
				    <input type="text" class="form-control" name="sumber_label" id="sumber_label" value="{{ $product->sumber_label }}" placeholder="Free Pic etc">
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