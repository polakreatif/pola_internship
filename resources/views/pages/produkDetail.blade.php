@extends('layouts.layout_produkDetail')

@section('title','Detail Produk')

@section('content')
<main class="mt-4">
    <div class="container">
        <div class="section-produk-sepatu-detail row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-7">
                <div class="card-produk-sepatu" style="background-image: url('{{ Storage::url($produk->gambar_produk) }}');"></div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-5">
                <h5 class="judul-produk">{{$produk->nama_produk}}</h5>
                <h6 class="kategori-sepatu">{{$produk->kategori->nama}}</h6>
                <div class="harga-sepatu-group d-flex justify-content-between">
                    <h6 class="kategori-sepatu">Harga</h6>
                    <h6 class="harga-sepatu-detail">@currency($produk->harga_produk)</h6>
                </div>
                <p class="konten-product">
                    {{ $produk->deskripsi_produk }}
                </p>
                <h6 class="judul-produk" style="margin-bottom: 15px;">Pilih Ukuran Anda</h6>
                <div class="col-12" style="padding-left: 0px !important;">
                    <div class="row">
                        <ul class="pilihan-ukuran">
                            <li>
                                <input type='radio' value='37' name='radio' id='ukuran_1' checked/>
                                <label for='ukuran_1'>37</label>
                            </li>
                            <li>
                                <input type='radio' value='38' name='radio' id='ukuran_2'/>
                                <label for='ukuran_2'>38</label>
                            </li>
                            <li>
                                <input type='radio' value='39' name='radio' id='ukuran_3'/>
                                <label for='ukuran_3'>39</label>
                            </li>
                            <li>
                                <input type='radio' value='40' name='radio' id='ukuran_4'/>
                                <label for='ukuran_4'>40</label>
                            </li>
                        </ul>
                        <ul class="pilihan-ukuran">
                            <li>
                                <input type='radio' value='41' name='radio' id='ukuran_5'/>
                                <label for='ukuran_5'>41</label>
                            </li>
                            <li>
                                <input type='radio' value='42' name='radio' id='ukuran_6'/>
                                <label for='ukuran_6'>42</label>
                            </li>
                            <li>
                                <input type='radio' value='43' name='radio' id='ukuran_7'/>
                                <label for='ukuran_7'>43</label>
                            </li>
                            <li>
                                <input type='radio' value='44' name='radio' id='ukuran_8'/>
                                <label for='ukuran_8'>44</label>
                            </li>
                        </ul>
                        <ul class="pilihan-ukuran">
                            <li>
                                <input type='radio' value='45' name='radio' id='ukuran_9'/>
                                <label for='ukuran_9'>45</label>
                            </li>
                            <li>
                                <input type='radio' value='46' name='radio' id='ukuran_10'/>
                                <label for='ukuran_10'>46</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="produk-button-pilihan">
                    <a href="#" class="btn btn-block btn-tambah-keranjang">Tambah Ke Keranjang</a>
                    <a href="#" class="btn btn-block btn-beli-produk">Beli Produk</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection