@extends('layouts.app')
@section('title','Halaman Detail')

@section('content')
    <!-- Main / Konten Utama -->
    <main class="mt-4">
        <!-- section produk kami header / judul -->
        <section class="section-produk-kami-header">
            <div class="container">

                @if (session()->has('success'))
                    <div class="alert alert-success"> {{ session()->get('success') }} </div>
                @endif
                
                <nav class="row navbar navbar-expand-lg navbar-light bg-white align-items-center">
                    {{-- <div class="section-title-detail">
                        <h5>Sepatu Laki</h5>
                    </div> --}}
                    {{-- <ul class="navbar-nav ml-auto mr-3"> --}}
                        {{-- <form action="#" class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control input-style" name="search-produk-sepatuLaki" placeholder="Cari Produk...">
                                <button type="submit" class="btn btn-search">
                                    <i class="material-icons">
                                        search
                                    </i>
                                </button>
                            </div>
                        </form> --}}
                        {{-- <li class="nav-item dropdown">
                            <a href="#" class=" nav-dropdown dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                                Kategori Sepatu
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbardrop">
                                @foreach ($kategoris as $kategori)
                                    <a href="#" class="dropdown-item">{{ $kategori->nama }}</a>
                                @endforeach
                            </div>
                        </li> --}}
                        {{-- <li class="nav-item dropdown">
                            <a href="#" class="nav-dropdown dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                                Urutkan Dari
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbardrop">
                                <a href="#" class="dropdown-item">Termurah</a>
                                <a href="#" class="dropdown-item">Termahal</a>
                                <a href="#" class="dropdown-item">Terbaru</a>
                            </div>
                        </li> --}}
                    {{-- </ul> --}}
                </nav>
            </div>
        </section>
        
        <!-- section konten produk kami -->
        <section class="section-produk-kami-konten">
            <div class="container">
                <div class="section-produk-sepatu row justify-content-center">
                    @foreach ($data as $datas)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="/produkDetail/{{ $datas->id }}" class="link">
                                <div class="card-produk-sepatu-detail" style="background-image: url('{{ Storage::url($datas->gambar_produk) }}');"></div>
                                <div class="text-sepatu">
                                    <h5 class="teks-nama-sepatu">{{$datas->nama_produk}}</h5>
                                    <p class="teks-kategori">{{$datas->kategori->nama}}</p>
                                    <span class="teks-harga-sepatu">@currency($datas->harga_produk)</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="produk-button-lihat-lebih text-center">
                    <a href="#" class="btn btn-produk-lihat-lebih">
                        Lihat Lebih Banyak
                    </a>
                </div>
            </div>
            <div class="elfsight-app-0fea70a3-21a9-4c80-86ec-29070e6f10d4"></div>
        </section>
    </main>
    
@endsection