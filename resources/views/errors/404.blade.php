@extends('layouts.global')

@section('content')
	<div class="d-flex flex-row justify-content-center">
		<div class="col-md-6 text-center">
			<div class="">
				<h1>404</h1>
				<h4>Halaman Tidak ditemukan.</h4>
				<a class="btn btn-theme" href="{{ url('/') }}">Kembali ke halaman utama</a>
			</div>
		</div>
	</div>
@endsection