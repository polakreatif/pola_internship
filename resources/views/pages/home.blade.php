@extends('layouts.frontend.master')
@section('content')

      <!-- Jumbotron Start -->
      <div class="jumbotron" style="background: url('/storage/img/jumbotron/{{ $jumbotrons->background }}'); background-size: 100% 100%;">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="display-4"><h1>{{ $jumbotrons->header }}</h1>
            <p class="lead">{!! $jumbotrons->konten !!}</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </div>
          <div class="col-sm-6">  
            <span><img src="/storage/img/jumbotron/{{ $jumbotrons->gambar_jumbo }}" class="banner img-fluid" alt="{{ $jumbotrons->header }}"></span>
          </div>
        </div>
      </div>
      <!-- Jumbtron End -->
      <div class="container">
        <!-- Product Start -->
        <hr class="my-4" id="product">
          <h1>Produk Kami</h1>
          <p>Berikut adalah layanan kami sediakan untuk anda.</p>
        <div class="row text-center">
          <div class="row">
            @foreach($products as $product)
            <div class="col-sm-4">
              <div class="box">
                <div class="card-body">
                  <a href="#" style="text-decoration:none">
                    <img src="/storage/img/product/{{ $product->product_image }}" class="card-img-top" alt="{{ $product->name_product }}">
                    <h5 class="card-title">{{ $product->name_product }}</h5>
                    <p class="card-text" style="color: #000;">{!! $product->desc_product !!}</p>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- Product End -->
        <!-- Slider Start -->
        <div class="row" id="space">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              @foreach($carousels as $carousel)
                @if($carousel->id == 1)
                  <div class="carousel-item active">
                    <img src="/storage/img/carousel/{{ $carousel->gambar }}" class="d-block img-fluid" alt="{{ $carousel->nama }}">
                  </div>
                @else
                  <div class="carousel-item">
                    <img src="/storage/img/carousel/{{ $carousel->gambar }}" class="d-block img-fluid" alt="{{ $carousel->nama }}">
                  </div>
                @endif
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Sebelumnya</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Berikutnya</span>
            </a>
          </div>
        </div>
      </div>
      <!-- Slider End -->
      <!-- About Us Start -->
      <div class="about-us-container">
        <div class="container">
          <div class="row">
            <div class="box-about mb-3" id="about-us">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="{{ asset('/img/1585313249662.png') }}" class="card-img" alt="Responsive image">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title" id="title-about">Tentang Kami</h3>
                    <p class="card-text" id="text-about">{!! \Illuminate\Support\Str::limit($companies->about, 150, $end='...') !!}</p>
                    <a class="btn btn-outline-info" href="#" role="button" id="click">See More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About Us End -->
      <!-- Contact Form Start -->
      <div class="about-us-container">
        <div class="container">
          <div style="text-align:center">
            <h2>Hubungi Kami</h2>
            <p>Silahkan Hubungi Kami via Whatsapp</p>
          </div>
          <div class="row">
            <div class="column-contact-us">
              <img src="{{ asset('/img/contact.png') }}" style="width:100%">
            </div>
            <div class="column-contact-us">
              <form action="https://wa.me/{{ $companies->whatsapp }}">
                <label for="isi">Isi Pesan</label>
                <textarea id="isi" name="text" placeholder="Tuliskan pesan anda disini.." style="height:170px"></textarea>
                <button type="submit"><i class="fab fa-whatsapp whatsapp"></i> Kirim Pesan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact Form End -->
@endsection
