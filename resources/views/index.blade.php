@extends('layouts.app')

@section('header')
    <div class="header jumbotron bg-transparent text-right">
        <div class="container">
            <h1 class="display-2">Selamat Datang</h1>
            <p class="lead">Ini merupakan website dari Andipputra Photography</p>
            <hr class="my-5">
        </div>
    </div>
@endsection

@section('about')
    <div class="container border-top">
        <h2 class="display-3 text-center py-5">Tentang Kami</h2>
        <div class="container d-flex">
            <div class="container text-justify">
                <p>Kami merupakan photographer yang berbasis di Jogjakarta, berdiri dari tahun 2018 kami telah banyak membantu mengabadikan momen-momen dihidup orang.
                    Kami dapat melakukan photoshoot untuk graduation, wedding, prewedding, dan acara berharga kalian lainnya.</p>
            </div>
            <div class="container text-center">
                <img src="/img/logo.png" alt="" height="150">
            </div>
        </div>
        
    </div>
@endsection

@section('service')
   <div class="container text-center border-top">
        <h2 class="display-3 text-center py-5">Layanan Kami</h2>
        <div class="container d-flex">
            <div class="card mx-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <img class="card-img-top" src="img/group.jpg" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Group Photoshoot </h5>
                </div>
            </div>
            <div class="card mx-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <img class="card-img-top" src="img/graduation.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Graduation Photoshoot</h5>
                </div>
            </div>
            <div class="card mx-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <img class="card-img-top" src="img/photoshoot.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Produk Photoshoot</h5>
                </div>
            </div>
        </div>
   </div>
@endsection

@section('portofolio')
    <div class="container border-top">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <h2 class="display-3 text-center py-5">Portofolio Kami</h2>
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/photoshoot.jpg" class="d-block w-100" alt="imagecap">
                </div>
                <div class="carousel-item">
                    <img src="/img/graduation.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/group.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

@section('artikel')
    <div class="container">
        <h2 class="display-3 text-center py-5">Artikel Terbaru</h2>
        <div class="card-deck" >
        @foreach ($articles as $article)
            <div class="card" style="box-shadow : 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <a href="/articles/{{$article->id_artikel}}">
                    <img src="img/{{$article->gambar}}" alt="Card image cap" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->judul}}</h5>
                        </a>
                        <p class="card-text text-justify">{{$article->isi}}</p>
                    </div>
            </div>
        @endforeach
    </div>
@endsection