@extends('layouts.global')

@section('head')
  <title>{{ $setting->app_name }} | {{ $setting->app_slogan }}</title>
@endsection

@section('header')

  @includeIf('comps.header_global', ['setting' => $setting])

@endsection

@section('content')
	<div class="container">
		<div class='text-center mt-3'>	
			<h3>Pembayaran</h3>
			<p>Pembayaran bisa melalui transfer ke rekening berikut atau COD langsung. Jangan lupa simpan bukti pembayaran dan konfirmasi pembayaran ke nomer berikut (WA) 082133170120.
			<a href="https://wa.me/{{ preg_replace('/^[0]/', '62', $user_admin->phone). '?text=Nama%20%3A%20%28atas%20nama%20pemesanan%29%0AJasa%20%3A%20%28nama%20jasa%20yang%20dipesan%29%0AWaktu%20pemesanan%20%3A%28waktu%20pemesanan%29%0A%0ANama%20Bank%20%3A%20%28Bank%20Anda%29%0Ajumlah%20%28Rp%29%20%3A%20%28uang%20yang%20anda%20kirimkan%29%0A%0Asertakan%20gambar%2Ffile%20bukti%20pembayaran'}}" class="btn btn-sm btn-outline-primary" target="_blank">Konfirmasi Pembayaran</a>
			</p>
		</div>
		
		<div class="row justify-content-center mt-3">
			<div class="col-12 col-sm-8 col-md-6 col-lg-4">
				<div class="card shadow mb-3">
					<div class=""
	        		style="
	         	 		background-image: url('{{ asset('storage/images/pembayaran-01.png') }}');
	         	 		background-color: #fff;
					  background-repeat: no-repeat;
					  background-position: center;
					  background-size: contain;
					  border-radius: 15px;
					  height: 250px;
					  width: 100%;
	        		"
	  				></div>
	  				<div class="card-body">
			          <h5>Bank BRI</h5>
			          <p>Atas Nama : Fikri Ali Fata<br/>
			         	Nomer Rekening : 723xxxxx
			      		</p>
			        </div>
				</div>
			</div>

			<div class="col-12 col-sm-8 col-md-6 col-lg-4">
				<div class="card shadow mb-3">
					<div class=""
            		style="
	         	 		background-image: url('{{ asset('storage/images/pembayaran-02.png') }}');
	         	 		background-color: #fff;
					  background-repeat: no-repeat;
					  background-position: center;
					  background-size: contain;
					  border-radius: 15px;
					  height: 250px;
					  width: 100%;
            		"
      				></div>
      				<div class="card-body">
			          <h5>Bank BTPN</h5>
			          <p>Atas Nama : Fikri Ali Fata<br/>
			         	Nomer Rekening : 723xxxxx
			      		</p>
			        </div>
				</div>
			</div>

			<div class="col-12 col-sm-8 col-md-6 col-lg-4">
				<div class="card shadow mb-3">
					<div class=""
	        		style="
	         	 		background-image: url('{{ asset('storage/images/pembayaran-03.png') }}');
	         	 		background-color: #fff;
					  background-repeat: no-repeat;
					  background-position: center;
					  background-size: contain;
					  border-radius: 15px;
					  height: 250px;
					  width: 100%;
	        		"
	  				></div>
	  				<div class="card-body">
			          <h5>Bank Mandiri Syariah</h5>
			          <p>Atas Nama : Fikri Ali Fata<br/>
			         	Nomer Rekening : 723xxxxx
			      		</p>
			        </div>
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