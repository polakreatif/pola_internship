@extends('layouts.lp')

@section('header')
    @foreach ($headers as $header)
        <div class="jumbotron-fluid">
            <div class="container d-flex">
                <div class="text-center justify-center p-2">
                    <img src="{{url('storage/img/headers/'.$header->gambar)}}" alt="{{$header->gambar}}" style="width:50%">
                </div>
                <div class="text-justify p-3">
                    <h1 class="display-4 text-white">{{$header->judul}}</h2>
                    <p class="lead text-white">{{$header->teks}}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('service')
    <div class="card-group bg-white">
        <div class="container p-5">
            <h2 class="display-5 text-dark text-center">Layanan Kami</h2>
            @foreach ($services as $service)
                <div class="card text-center">
                    <img class="card-img-top" src="{{url('storage/img/services/'.$service->gambar)}}" alt="{{$service->gambar}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$service->judul}}</h5>
                        <p class="card-text">{{$service->teks}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('portofolio')
    <div class="bg-white">
        <div class="container p-5">
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($portofolios as $portofolio)
                        <h2 class="display-5 text-dark text-center">{{$portofolio->judul}}</h2>
                        <div class="carousel-item">
                            <img src="{{url('storage/img/portofolios/'.$portofolio->gambar)}}" alt="">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev text-dark" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                    <span class="sr-only text-dark">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
          </div>
        </div>
    </div>
@endsection

@section('career')
    <div class="bg-white">
        <div class="container p-5">
            <h2 class="display-5 text-dark text-center">Bergabung bersama kami</h2>
            @foreach ($careers as $career)
                <div class="card text-center">
                    <img class="card-img-top" src="{{url('storage/img/careers/'.$career->gambar)}}" alt="{{$career->gambar}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$career->judul}}</h5>
                        <p class="card-text">{{$career->teks}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('artikel')
    <div class="bg-white">
        <div class="container p-5">
            <h2 class="display-5 text-dark text-center">Artikel Terbaru</h2>
            @foreach ($artikels as $artikel)
                <div class="card text-center">
                    <img class="card-img-top" src="{{url('storage/img/artikels/'.$artikel->gambar)}}" alt="{{$artikel->gambar}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$artikel->judul}}</h5>
                        <p class="card-text">{{$artikel->teks}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

