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
			@if(count($orders) > 0)
				<div class="accordion shadow" id="my-order">
					@foreach($orders as $order)
						<div class="card">
							<div class="card-header" id="heading-{{ $order->id }}">
							 <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $order->id }}" aria-expanded="true" aria-controls="collapse-{{ $order->id }}" >
						          {{ $order->product->name }} | {{ $order->created_at }}
						        </button>
						      </h2>
							</div>

							<div id="collapse-{{ $order->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading-{{ $order->id }}" data-parent="#my-order">
						      <div class="card-body">
						       <p>
						       	Nama : {{ $order->name }}<br/>
						        Nomer Hp / Whast App : {{ $order->phone }}<br/>
						        Alamat : {{ $order->address }}<br/><br/>

						        Harga : Rp. {{ $order->product->price }}<br/>
						        Berat (perkiraan) : {{ $order->weight }}<br/>
						        Total Harga (perkiraan) : Rp. {{ $order->weight*$order->product->price }}<br/>
						        <a href="{{ url('/payments') }}" class="btn btn-sm btn-primary">Cara pembayaran</a>
						        <span class="btn btn-sm btn-theme"> {{ $order->status->name }} </span>
						       </p>
						      </div>
						    </div>

						</div>
					@endforeach
				</div>
			@else 
				<div class="text-center">
					<p>belum ada pesanan. Ayo pesan jasa sekarang juga.</p>
					<a href="{{ url('/order') }}" class="btn btn-theme">Pesan Jasa</a>
				</div>
			@endif
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