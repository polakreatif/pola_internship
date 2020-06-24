@extends('layouts.app')

@section('title','Keranjang')

@section('content')

<main class="mt-4">
    
    <div class="container">
        
        @if (session()->has('deleted'))
            <div class="alert alert-danger"> {{ session()->get('deleted') }} </div>
        @endif
        @if (session()->has('update'))
            <div class="alert alert-success"> {{ session()->get('update') }} </div>
        @endif

        @if($cart)

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="section-produk-sepatu-detail row justify-content-center">


            <div class="col-sm-12 col-md-10 col-lg-9">
                <div class="d-flex justify-content-between">
                    <h4>Keranjang Anda</h4>
                    <h6>Di keranjang anda terdapat {{ $cart->totalQty }} barang</h6>
                </div>
                <div class="attendee">
                    <table class="table table-responsive-sm text-center">
                        <thead>
                            <tr>
                                <td>Gambar</td>
                                <td>Nama</td>
                                <td>Jumlah</td>
                                <td>Harga</td>
                                <td>Hapus Produk</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart->items as $carts)
                                <tr>
                                    <td>
                                        <img src="{{ Storage::url($carts['gambar_produk']) }}" height="120px" >
                                    </td>
                                    <td class="align-middle">
                                        <p class="desk-judul">{{ $carts['nama_produk'] }}</p>
                                    </td>
                                    <td class="align-middle">
                                        <form action="{{ route('keranjang.update', $carts['id']) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="d-flex justify-content-center">
                                                <input type="number" name="qty" class="form-control jumlah-barang" value="{{ $carts['qty'] }}">
                                                <button type="submit" class="btn btn-info btn-sm ml-2">Perbarui</button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="align-middle">
                                        <p class="harga-keranjang">@currency( $carts['harga_produk'] )</p>
                                    </td>
                                    <td class="align-middle">
                                        <form action="{{ route('keranjang.remove', $carts['id']) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach   
                        </tbody>
                    </table>
                </div>
                {{-- <div class="btn-perbarui-kontainer">
                    <a href="#" class="btn btn-perbaruikeranjang btn-block">
                        Perbarui Keranjang
                    </a>
                </div> --}}
            </div>
            <div class="col-sm-12 col-md-2 col-lg-3">
                <div class="card card-checkout card-right">
                    <div class="sub-bagian">
                        <h6 class="judul-keranjang" >Ringkasan Belanja</h6>
                        <div class="harga-sepatu-group d-flex justify-content-between">
                            <h6 class="kategori-sepatu deskripsi-keranjang">Total Harga</h6>
                            <h6 class="harga-sepatu-detail deskripsi-keranjang">@currency($cart->totalPrice)</h6>
                        </div>
                        <div class="harga-sepatu-group d-flex justify-content-between">
                            <h6 class="kategori-sepatu deskripsi-keranjang">Total Barang</h6>
                            <h6 class="harga-sepatu-detail deskripsi-keranjang">{{$cart->totalQty}}</h6>
                        </div>
                        <hr>
                    </div>
                    <form action="{{ route('keranjang.checkout') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="judul-keranjang" for="Alamat Pengiriman">Alamat Pengiriman</label>
                            <textarea class="input-alamatpengiriman" name="alamatPengiriman" rows="5" cols="20" placeholder="Masukkan alamat anda" required></textarea>
                            <hr>
                        </div>
                        <div class="form-group">
                            <h6 class="judul-keranjang" >Pembayaran</h6>
                            <p class="deskripsi-keranjang" >Silahkan lakukan pembayaran dengan memilih metode pembayaran di bawah ini</p>
                            <select name="pembayaran" required class="form-control pembayaran-keranjang">
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="BCA">BCA</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="BRI">BRI</option>
                            </select>
                        </div>
                        <div class="btn-checkoutContainer">
                            <button class="btn btn-block btn-checkout" type="submit">
                                Lakukan Pembayaran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @else
            <p>Silahkan Tambahkan Barang Karena Keranjang Anda Masih Kosong</p>
            @endif

        </div>
    </div>
    

</main>

@endsection