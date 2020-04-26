@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Tentang Kami </title>
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
        <div class="d-flex">
          <h1 class="m-0 text-dark">Pesanan</h1>
          <a class="btn btn-primary ml-3" href="{{ url('/order') }}">Tambah</a>
        </div>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Pesanan</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
	<div class="container">
		<div class="card">
			@if(session('success'))
				<div class="alert alert-success">
					{{session('success')}}
				</div>
			@endif 

			<div class="card-body">

				<div class="table-responsive">
		          <table class="table table-hover table-sm">
		            <thead class="thead-dark">
		              <tr>
		                <th scope="col">#</th>
		                <th scope="col">Produk</th>
		                <th scope="col">Berat (perkiraan)</th>
		                <th scope="col">Harga</th>
		                <th scope="col">Total Harga (perkiraan)</th>
		                <th scope="col">Nama</th>
		                <th scope="col">Nomer Hp / WA</th>
		                <th scope="col">Alamat</th>
		                <th scope="col">Catatan</th>
		                <th scope="col"></th>
		              </tr>
		            </thead>
		            <tbody>
              		@foreach($orders as $order)
                		<tr>
		                  <th scope="row">{{ $loop->iteration }}</th>
		                  <td>
		                  	<a href="{{ url('/p/'.$order->product->slug) }}">
		                  		{{ $order->product->name }}
		                  	</a>	
		                  </td>
		                  <td>
		                  	{{ $order->weight }}
		              	  </td>
		              	  <td>
		                  	{{ $order->product->price }}
		              	  </td>
		              	   <td>
		                  	{{ $order->weight*$order->product->price }}
		              	  </td>
		                  <td>
		                    {{ $order->name }}
		                  </td>
		                  <td>
		                    {{ $order->phone }}
		                  </td>
		                  <td>
		                    {{ $order->address }}
		                  </td>
		                  <td>
		                    {{ $order->note }}
		                  </td>
		                  <td>
		                    <a href="{{ url('/orders/' . $order->id . '/edit') }}" class="btn btn-sm btn-outline-primary mx-1">Edit</a>
		                    
		                    <form
		                      onsubmit="return confirm('Hapus pesanan secara permanen ?')"
		                      class="d-inline mx-1"
		                      action="{{url('/orders/'. $order->id)}}"
		                      method="POST">
		                      @csrf
		                      <input
		                      type="hidden"
		                      name="_method"
		                      value="DELETE">
		                      <button
		                      type="submit"
		                      value="Delete"
		                      class="btn btn-outline-danger btn-sm">Hapus</button>
		                    </form>
		                   </td>
                		</tr>
              		@endforeach
              
              
		            </tbody>
		          </table>
		        </div>

			</div>
		</div>
	</div>
@endsection