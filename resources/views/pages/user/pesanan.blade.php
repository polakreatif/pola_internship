@extends('layouts.userDashboard')

@section('title','Halaman Riwayat Pemesanan')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Riwayat Pesanan</h1>
      {{-- <div class="dropdown mb-4">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter
        </button>
        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Semua Pemesanan</a>
          <a class="dropdown-item" href="#">Pemesanan Sukses</a>
          <a class="dropdown-item" href="#">Pemesanan Tertunda</a>
        </div>
      </div> --}}
    </div>

    
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Sepatu</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Ukuran</th>
                            <th>Alamat Pengiriman</th>
                            <th>Metode Pembayaran</th>
                            <th>Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                      {{-- @dd($carts[0]->items[2]['nama_produk']) --}}
                      {{-- @dd(count($carts)) --}}
                      {{-- @dd($carts[0]) --}}
                        @foreach ($carts as $index => $cart)
                      {{-- @dd($cart->items[array_keys($cart->items)[$index]]) --}}
                          @foreach ($cart->items as $item)
                        {{-- @dd($item) --}}
                        @php
                        $no = $index;
                        @endphp
                          <tr>
                              <td>
                                  {{++$no}}
                              </td>
                              <td>
                                {{$item['nama_produk']}}
                              </td>
                              <td>
                                <img src="{{ Storage::url($item['gambar_produk']) }}" alt="" class="img-responsive" style="width:80px" >
                              </td>
                              <td>
                                @currency($item['harga_produk'] * $item['qty'])
                              </td>
                              <td>
                                {{$item['size']}}
                              </td>
                              <td>
                                {{-- @dd($index) --}}
                                  {{-- @if ($index > 1) --}}
                                    {{$order[$index]->alamatPengiriman}}
                                  {{-- @else --}}
                                  {{-- @dd(count($order-1)) --}}
                                  {{-- @dd($order[count($order)-1]) --}}
                                    {{-- {{$order[$index-1]->alamatPengiriman}} --}}
                                  {{-- @endif --}}
                                  {{-- @dd($order[$index]->alamatPengiriman) --}}
                                  
                              </td>
                              <td>
                                  {{$order[$index]->pembayaran}}
                              </td>
                              <td>{{$item['qty']}}</td>
                          </tr>
                          {{-- @dd($index) --}}
                          @endforeach
                          {{-- @dd($index) --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


  </div>
  <!-- /.container-fluid -->
@endsection