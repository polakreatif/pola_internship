@extends('layouts.global')

@section('head')
  <title>{{ $setting->app_name }} | {{ $setting->app_slogan }}</title>
@endsection

@section('header')

  @includeIf('comps.header_global', ['setting' => $setting])

@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6" data-aos="zoom-in">
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
		              	height: 450px;
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

			<div data-aos="zoom-in" class="col-12 col-md-6 d-flex flex-column align-items-stretch  justify-content-center">
				<div>
					<h1>{{ $product->name }}</h1>
					<h3>Rp. {{ $product->price }}</h3>
					<br/>
					<p>{{ $product->description }}</p>
					<br/><br/><br/>
					<a href="{{ url('/order/'.$product->slug) }}" class="btn btn-theme w-100">Pesan Jasa</a>
				</div>
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