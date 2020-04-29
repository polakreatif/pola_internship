@extends('layouts.global')

@section('content')
	<div class="d-flex flex-row justify-content-center">
		<div class="col-md-6 text-center">
			<div class="">
				<h1>403</h1>
				<h4>Anda dilarang mengakses halaman ini.</h4>
				<a class="btn btn-success mx-2" href="{{ url('/') }}">Kembali ke halaman utama</a>
			</div>
		</div>
	</div>
@endsection