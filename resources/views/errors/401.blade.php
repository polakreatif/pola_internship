@extends('layouts.global')

@section('content')
	<div class="d-flex flex-row justify-content-center">
		<div class="col-md-6 text-center">
			<div class="">
				<h1>401</h1>
				<h4>Anda belum login ! harap login terlebih dahulu.</h4>
				<a class="btn btn-success mx-2" href="{{ url('/') }}">Kembali ke halaman utama</a>
				<a class="btn btn-success mx-2" href="{{ url('/login') }}">Login</a>
			</div>
		</div>
	</div>
@endsection