@extends('layouts.lp')

@section('header')
    @foreach ($headers as $header)
        <div class="jumbotron-fluid">
            <div class="container d-flex text-center">
                <div class="p-3 text-white">
                    <h1 class="display-3">{{$header->judul}}</h2>
                    <p class="lead">{{$header->teks}}</p>
                    <hr class="head">
                </div>
                <div class="text-center justify-center p-2">
                    <img src="{{url('storage/img/headers/'.$header->gambar)}}" alt="{{$header->gambar}}" style="width:50%">
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('service')
    <div class="bg-white pt-5">
        <div class="container pt-3">
            <h2 class="display-4 text-dark text-center">Layanan Kami</h2>
            <hr class="divider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner row w-auto mx-auto">
                    @foreach ($services as $key => $service)
                        <div class="carousel-item col-md-5 {{$key == 0 ? 'active' : '' }} mx-auto">
                            <div class="card shadow p-3 mb-4 bg-white rounded">
                                <img class="card-img-top img-fluid" src="{{url('storage/img/services/'.$service->gambar)}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$service->judul}}</h5>
                                    <p class="card-text text-justify">{{$service->teks}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                  </div>
                  
                    <div class="control-box mx-auto text-center">                            
                        <a data-slide="prev" href="#myCarousel" class="carousel-control left btn btn-gradient-two">‹</a>
                        <a data-slide="next" href="#myCarousel" class="carousel-control right btn btn-gradient-two">›</a>
                    </div>
                </div>

            <div class="text-center pt-3">
                <a href="" class="btn btn-gradient text-center">Hubungi kami untuk penawaran yang lebih menarik</a>
            </div>
        </div>
    </div>
@endsection

@section('portofolio')
    <div class="bg-white pt-5">
        <div class="container pt-5">
            <h2 class="display-4 text-dark text-center">Hasil Kerja Kami</h2>
            <hr class="divider">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($portofolios as $key => $portofolio)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{url('storage/img/portofolios/'.$portofolio->gambar)}}"  alt="{{$portofolio->gambar}}"> 
                    </div>
                    @endforeach
                </div>
            <!-- Left and right controls -->
            <br>
            <div class="mx-auto text-center">
                <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only text-dark">Previous</span>
                  </a>
                  <a class="carousel-control-next text-dark" href="#myCarousel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                    <span class="sr-only text-dark">Next</span>
                  </a>
            </div>

            </div>  
                
        </div>
    </div>
@endsection

@section('career')
    <div class="bg-white pt-5">
        <div class="container pt-5">
            <h2 class="display-4 text-dark text-center">Bergabung bersama kami</h2>
            <hr class="divider">
            <div class="container mx-auto text-justify d-flex flex pt-3">
                <div class="container">
                    <img src="\svg\undraw_career_progress_ivdb.svg" width="100%" alt="undraw_career_progress_ivdb.svg">
                </div>
                <div class="container">
                    <div class="row">
                        <article>
                            Bangun career kamu bersama kami, rasakan sensasi mengabadikan moment-moment customer. 
                            Bergabunglah sebagai Photographer Wedding, Product, Graduation, Travel, and Other.
                        </article>
                    </div>
                    <div class="row text-center pt-4">
                        <div class="col text-center">
                            <a href="/careers" class="btn btn-gradient text-center">Daftar Pekerjaan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('artikel')
    <div class="bg-white pt-5">
        <div class="container p-5">
            <h2 class="display-4 text-dark text-center">Artikel Terbaru</h2>
            <hr class="divider">
            <div class="row">
                @foreach ($artikels as $artikel)
                <div class="col">
                    <div class="card shadow p-3 mb-4 bg-white rounded">
                        <img class="card-img-top img-fluid" src="{{url('storage/img/artikels/'.$artikel->gambar)}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title text-bold">{{$artikel->judul}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection

