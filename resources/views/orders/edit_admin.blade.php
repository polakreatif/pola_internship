@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Edit Pesanan </title>
@endsection

@section('nav')
  @include('comps.admin.navbar')

  @includeIf('comps.admin.sidebar', [
    'setting' => $setting,
    'user_admin' => $user_admin
  ])
@endsection

@section('footer')
  @include('comps.admin.footer')
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Pesanan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ url('/orders') }}">Pesanan</a></li>
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
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif 

			<div class="card-body">
				<form enctype="multipart/form-data" action="{{ url('/orders/'.$order->id.'/update') }}" method="POST">
					@csrf

				  	<input
					type="hidden"
					value="PUT"
					name="_method" />

					<div class="row">
						<div class="col-12 col-sm-6 col-md-4">
							<div class="position-relative">
								 @if($order->product->type == 1)
						            <div class="ribbon-wrapper ribbon-lg">
						              <div class="ribbon bg-success text-white text-md">
						                Express
						              </div>
						            </div>
						        @endif  
								<div class="shadow mb-3"
								style="
									background-image: url('{{ asset('storage/'.$order->product->image) }}');
									background-color: #fff;
					              	background-repeat: no-repeat;
					              	background-position: center;
					              	background-size: contain;
					              	border-radius: 15px;
					              	height: 150px;
					              	width: 100%;
								"
								></div>
								@if(strlen($order->product->sumber_link) > 0)
							      <div class="d-flex justify-content-start">
							        <a href="https://{{ $order->product->sumber_link }}" target="_blank">{{ $order->product->sumber_label }}</a>
							      </div>
							    @endif
							</div>
						</div>
						<div class="col-12 col-sm-4 col-md-4">
							<div>
								<h3>{{ $order->product->name }}</h3>
								<h5>Rp. {{ $order->product->price }}</h5>
								<br/>
								<a href="{{ url('/p/'.$order->product->slug) }}" class="btn btn-success">Lihat jasa</a>
							</div>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<label for="weight">Berat (perkiraan)</label>
						<input type="number" class="form-control" name="weight" id="weight" aria-describedby="weightHelp" placeholder="1" value="{{ $order->weight }}">
						<small id="weightHelp" class="form-text text-muted">Isikan perkiraan berat.</small>
					</div>
					<hr/>
					<div class="form-group">
						<label for="name">Nama</label>
						<input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Steve..." value="{{ $order->name }}">
						<small id="nameHelp" class="form-text text-muted">Nama Anda max 199 karakter.</small>
					</div>

					<div class="form-group">
						<label for="phone">Nomer Hp. / Whats App</label>
						<input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="08213317xxxx" value="{{ $order->phone }}">
						<small id="phoneHelp" class="form-text text-muted">Nomer Hp. / Whats App min 10 max 15 angka.</small>
					</div>

					<div class="form-group">
						<label for="address">Alamat Lengkap</label>
						<textarea type="text" rows="4" class="form-control" name="address" id="address" aria-describedby="addressHelp" placeholder="jalan salak...">{{ $order->address }}</textarea>
						<small id="addressHelp" class="form-text text-muted">Alamat Lengkap max 245 angka.</small>
					</div>
					<div class="form-group">
						<label for="note">Catatan</label>
						<textarea type="text" rows="4" class="form-control" name="note" id="note" aria-describedby="noteHelp" placeholder="Barang ada di teras...">{{ $order->note }}</textarea>
						<small id="noteHelp" class="form-text text-muted">Catatan max 245 angka.</small>
					</div>
					<hr/>
					<button type='submit' class="btn btn-primary w-100">Simpan Perubahan</button>
				</form>
			</div>
		</div>
	</div>	
@endsection