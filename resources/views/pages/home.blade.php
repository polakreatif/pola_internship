@extends('layouts.frontend.master')
@section('content')

      <!-- Jumbotron Start -->
      <div class="jumbotron" id="home">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="display-4"><h1>Get Started</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt harum repellat quam eligendi a pariatur, animi ipsa laborum delectus eius quia voluptatibus officiis vitae numquam itaque architecto adipisci neque at!</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </div>
          <div class="col-sm-6">  
            <span><img src="{{ asset('/img/1585322535472.png') }}" class="banner img-fluid" alt="Jumbotron Images"></span>
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
            <div class="col-sm-4">
              <div class="box">
                <div class="card-body">
                  <a href="#" style="text-decoration:none">
                    <img src="{{ asset('/img/1585323126329.png') }}" class="card-img-top" alt="Website Development">
                    <h5 class="card-title">Website Development.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, pariatur.</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="box">
                <div class="card-body text-center">
                  <a href="#" style="text-decoration:none">
                    <img src="{{ asset('/img/1585323418010.png') }}" class="card-img-top" alt="Desain UI/UX">
                    <h5 class="card-title">Desain UI / UX</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, doloremque.</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="box">
                <div class="card-body text-center">
                  <a href="#" style="text-decoration:none">
                    <img src="{{ asset('/img/1585323920344.png') }}" class="card-img-top" alt="3D Modelling">
                    <h5 class="card-title">3D Modelling</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, unde.</p>
                  </a>
                </div>
              </div>
            </div>
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
              <div class="carousel-item active">
                <a href="#"><img src="{{ asset('/img/website-development-banner_33099-1687.jpg') }}" class="d-block img-fluid" alt="Website Development"></a>
              </div>
              <div class="carousel-item">
                <a href="#"><img src="{{ asset('/img/mobile-app-concept_52683-5158.jpg') }}" class="d-block img-fluid" alt="Desain UI/UX"></a>
              </div>
              <div class="carousel-item">
                <a href="#"><img src="{{ asset('/img/3d-printing-flat-horizontal-banners-set_1284-7494.jpg') }}" class="d-block img-fluid" alt="3D Modelling"></a>
              </div>
              <div class="carousel-item">
                <a href="#"><img src="{{ asset('/img/set-modern-abstract-web-buttons-with-ability-edit_110464-82.jpg') }}" class="d-block img-fluid" alt="3D Modelling"></a>
              </div>
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
                    <p class="card-text" id="text-about">Inspiring Media adalah sebuah penyedia jasa pembuatan web dan juga desain. Inspiring media sendiri telah berdiri tahun 2016. Inspiring Media dulunya bernama ....</p>
                    <a class="btn btn-outline-info" href="#" role="button" id="click">See More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About Us End -->
@endsection
