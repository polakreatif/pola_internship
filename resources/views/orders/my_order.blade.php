@extends('layouts.global')

@section('head')
  <title>{{ $setting->app_name }} | {{ $setting->app_slogan }}</title>
@endsection

@section('header')

  @includeIf('comps.header_global', ['setting' => $setting])

@endsection

@section('content')
	<div class="container">
		@if(session('success'))
			<div class="alert alert-success">
				{{session('success')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif

		<div class='text-center mt-3'>	
			<h3>Pesanan Saya :</h3>
		</div>
		
		<div class="mt-3">
			
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