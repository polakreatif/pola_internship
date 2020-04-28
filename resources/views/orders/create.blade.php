@extends('layouts.global')

@section('head')
  <title>{{ $setting->app_name }} | {{ $setting->app_slogan }}</title>
@endsection

@section('header')
  @includeIf('comps.header_global', ['setting' => $setting])
@endsection

@section('content')
	<div class="container">
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				Terjadi kesalahan ! atau data yang dimasukan tidak sesuai. Coba periksa kembali dan masukan data dengan benar.
			</div>
		@endif

		<div class="mt-3 text-center">
			<h2>Pemesanan :</h2>
		</div>

		<div class="row mt-5 justify-content-center">
			<div class="col-12 col-sm-6 col-md-4">
				<div class="position-relative">
					 @if($product->type == 1)
			            <div class="ribbon-wrapper ribbon-lg">
			              <div class="ribbon bg-success text-white text-md">
			                Express
			              </div>
			            </div>
			        @endif  
					<div class="shadow mb-3"
					style="
						background-image: url('{{ asset('storage/'.$product->image) }}');
						background-color: #fff;
		              	background-repeat: no-repeat;
		              	background-position: center;
		              	background-size: contain;
		              	border-radius: 15px;
		              	height: 150px;
		              	width: 100%;
					"
					></div>
					@if(strlen($product->sumber_link) > 0)
				      <div class="d-flex justify-content-start">
				        <a href="https://{{ $product->sumber_link }}" target="_blank">{{ $product->sumber_label }}</a>
				      </div>
				    @endif
				</div>
			</div>
			<div class="col-12 col-sm-4 col-md-4">
				<div>
					<h3>{{ $product->name }}</h3>
					<h5>Rp. {{ $product->price }}</h5>
					<br/>
					<a href="{{ url('/p/'.$product->slug) }}" class="btn btn-theme">Lihat jasa</a>
				</div>
			</div>
		</div>
		<hr/>

		<div class="row mt-3 justify-content-center">
			<div class="col-12 col-md-8">
				<form enctype="multipart/form-data" action="{{ url('/orders/'.$product->id.'/store') }}" method="POST">
				@csrf

					<div class="form-group">
						<label for="weight">Berat (perkiraan)</label>
						<input type="number" class="form-control" name="weight" id="weight" aria-describedby="weightHelp" placeholder="1">
						<small id="weightHelp" class="form-text text-muted">Isikan perkiraan berat.</small>
					</div>
					<hr/>
					<div class="form-group">
						<label for="name">Nama</label>
						<input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Steve...">
						<small id="nameHelp" class="form-text text-muted">Nama Anda max 199 karakter.</small>
					</div>

					<div class="form-group">
						<label for="phone">Nomer Hp. / Whats App</label>
						<input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="08213317xxxx">
						<small id="phoneHelp" class="form-text text-muted">Nomer Hp. / Whats App min 10 max 15 angka.</small>
					</div>

					<div class="form-group">
						<label for="address">Alamat Lengkap</label>
						<textarea type="text" rows="4" class="form-control" name="address" id="address" aria-describedby="addressHelp" placeholder="jalan salak..."></textarea>
						<small id="addressHelp" class="form-text text-muted">Alamat Lengkap max 245 angka.</small>
					</div>
					<div class="form-group">
						<label for="note">Catatan</label>
						<textarea type="text" rows="4" class="form-control" name="note" id="note" aria-describedby="noteHelp" placeholder="Barang ada di teras..."></textarea>
						<small id="noteHelp" class="form-text text-muted">Catatan max 245 angka.</small>
					</div>
					<hr/>
					<button type='submit' class="btn btn-theme w-100">Kirim</button>
				</form>	
			</div>
		</div>

	</div>
@endsection

@section('footer')
  <footer id="footer"> 
    @includeIf('comps.buletin', ['other' => $other ])
    <br/><br/><br/>

    @includeIf('comps.footer', ['other' => $other ])

    @includeIf('comps.footer_copyright')
  </footer>
@endsection