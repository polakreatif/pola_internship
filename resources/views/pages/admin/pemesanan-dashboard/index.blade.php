@extends('layouts.admin')

@section('title','Halaman Daftar Produk')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Daftar Pesanan</h1>
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
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Ukuran</th>
                            <th>Alamat Pengiriman</th>
                            <th>Metode Pembayaran</th>
                            <th>Qty</th>
                            <th>Pemesan</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($carts as $index => $cart)
                        @foreach ($cart->items as $item)
                          <tr>
                            @php
                              $no = $index;
                            @endphp
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
                              {{$order[$index]['alamatPengiriman']}}
                            </td>
                            <td>
                              {{$order[$index]['pembayaran']}}
                            </td>
                            <td>
                              {{$item['qty']}}
                            </td>
                            <td>
                              {{-- {{$order[$index]->users['name']}} --}}
                            </td>
                          </tr>
                        @endforeach
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


  </div>
  <!-- /.container-fluid -->
@endsection