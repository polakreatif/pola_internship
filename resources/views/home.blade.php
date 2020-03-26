@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('meta-desc')
    <meta 
        name="description" 
        content="{{ $title }}. {{ $description }}"
    >
@endsection

@section('jumbotron')
    <div 
        class="jumbotron jumbotron-fluid"
        style="background-image: url({{ $mediaJumbotron }}); background-color: #fff; background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; height: 550px;"
    >
        <div class="container text-white">
            <br/><br/><br/>
            <h1 class="bg-text-jumbotron d-inline-flex">{{ $titleJumbotron }}</h1>
            <br/>
            <p class="bg-text-jumbotron d-inline-flex font-italic">" {{ $text01Jumbotron }} "</p>
            <br/><br/><br/>
            <p class="bg-text-jumbotron d-inline-flex">{{ $text02Jumbotron }}</p>
            <br/>
            <a class="btn btn-success btn-lg" href="#" role="button">{{ $textDownload }}</a>
        </div>
    </div>
@endsection

@section('about')
    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-6 text-center">
            <img 
                src="{{ $mediaAboutUs }}" 
                alt="logo"
                class="w-100 shadow"
                style="border-radius: 1rem;"
            />
        </div>
        <div class="col-sm-8 col-lg-6 text-center">
            <br/><br/><br/>
            <h2>{{ $titleAboutUs }}</h2>
            <p>{{ $description }}</p>
        </div>
    </div>
@endsection


@section('carousel')
     <div class="row justify-content-center">
        
        <div class="col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img 
                            src="https://picsum.photos/1200/550" 
                            class="d-block w-100" 
                            alt="..."
                            style="border-radius: 1rem;"
                        >
                    </div>
                    <div class="carousel-item">
                        <img 
                            src="https://picsum.photos/1200/550" 
                            class="d-block w-100" 
                            alt="..."
                            style="border-radius: 1rem;"
                        >
                    </div>
                    <div class="carousel-item">
                        <img 
                            src="https://picsum.photos/1200/550" 
                            class="d-block w-100" 
                            alt="..."
                            style="border-radius: 1rem;"
                        >
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('product')
    <h2>Layanan Kami</h2>
    <!-- Space between product -->
    <br/>
    <!-- Cuci pakaian -->
    <h3>Cuci Pakaian</h3>
    <br/>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Express Satuan</h5>
                    <p>Paket cuci pakaian (baju, celana, dalaman, dll) satuan. 
                    Dijamin jadi 1/2 hari (12 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Reguler Satuan</h5>
                    <p>Paket cuci pakaian (baju, celana, dalaman, dll) satuan. 
                    Dijamin jadi 3 hari (3 x 24 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Express Kiloan</h5>
                    <p>Paket cuci pakaian (baju, celana, dalaman, dll) kiloan. 
                    Dijamin jadi 1/2 hari (12 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Minimal 2 kilo.
                    Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Reguler Kiloan</h5>
                    <p>Paket cuci pakaian (baju, celana, dalaman, dll) kiloan. 
                    Dijamin jadi 3 hari (3 x 24 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Minimal 2 kilo.
                    Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Cuci Aja</h5>
                    <p>Suka nyetrika sendiri?
                    Ada paket Cuci Aja (baju, celana, dalaman, dll).
                    Bersih, wangi, higienis, seperti baru, sudah dilipat.
                    Waktu menyesuaikan paket satuan/kiloan.
                    Harga adalah harga paket pilihan satuan/kiloan di <mark>diskon 20%.</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Setrika Aja</h5>
                    <p>Pakaian udah dicuci ?
                    Tenang, ada paket Setrika Aja (baju, celana, dalaman, dll).
                    Harum, wangi, rapi, licin.
                    Waktu menyesuaikan paket satuan/kiloan.
                    Harga adalah harga paket pilihan satuan/kiloan di <mark>diskon 40%.</mark>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- space between product -->
    <br/>
    <!-- Cuci Karpet -->
    <h3>Cuci Karpet</h3>
    <br/>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Express Besar</h5>
                    <p>Paket cuci karpet ukuran besar. 
                    Dijamin jadi 3 hari (3 x 24 jam).
                    Bersih, wangi, higienis, gak bau apek, seperti baru.
                    Cuma <del>Rp. 95.000</del> <mark>Rp.89.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Reguler Besar</h5>
                    <p>Paket cuci karpet ukuran besar. 
                    Dijamin jadi 7 hari (7 x 24 jam).
                    Bersih, wangi, higienis, gak bau apek, seperti baru.
                    Cuma <del>Rp. 65.000</del> <mark>Rp.59.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Express Sedang</h5>
                    <p>Paket cuci karpet ukuran sedang. 
                    Dijamin jadi 3 hari (3 x 12 jam).
                    Bersih, wangi, higienis, gak bau apek, seperti baru.
                    Cuma <del>Rp. 55.000</del> <mark>Rp.49.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Reguler Sedang</h5>
                    <p>Paket cuci karpet ukuran sedang. 
                    Dijamin jadi 7 hari (7 x 12 jam).
                    Bersih, wangi, higienis, gak bau apek, seperti baru.
                    Cuma <del>Rp. 35.000</del> <mark>Rp.29.999</mark>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- space between product -->
    <br/>
    <!-- Cuci Karpet -->
    <h3>Cuci Sepatu</h3>
    <br/>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Express Besar</h5>
                    <p>Paket cuci sepatu ukuran besar. 
                    Dijamin jadi 1/2 hari (12 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Cuma <del>Rp. 35.000</del> <mark>Rp.29.999</mark>
                    </p>     
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Reguler Besar</h5>
                    <p>Paket cuci sepatu ukuran besar. 
                    Dijamin jadi 3 hari (3 x 24 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Express Sedang</h5>
                    <p>Paket cuci sepatu ukuran sedang. 
                    Dijamin jadi 1/2 hari (12 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Reguler Sedang</h5>
                    <p>Paket cuci sepatu ukuran sedang. 
                    Dijamin jadi 3 hari (3 x 24 jam).
                    Bersih, wangi, higienis, seperti baru.
                    Cuma <del>Rp. 15.000</del> <mark>Rp. 9.999,-</mark>
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection