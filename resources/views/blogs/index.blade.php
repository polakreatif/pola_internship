@extends('layouts.default')

@section('head')
    <title> SHopTronik | Title </title>
    <meta 
        name="description" 
        content="SHopTronik. desc"
    >

    <!-- Fontawesome -->
    <link href="{{ asset('/plugins/Fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('/plugins/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Vendor Css -->
    <link href="{{ asset('/plugins/Appland/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/Appland/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/Appland/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Appland Main CSS File -->
    <link href="{{ asset('/plugins/Appland/css/style.css') }}" rel="stylesheet">
@endsection

@section('script')
    <!-- Font Awesome -->
    <script src="{{ asset('/plugins/Fontawesome/js/all.min.js') }}"></script>

    <!-- Jquery -->
    <script src="{{ asset('/plugins/Appland/vendor/jquery/jquery.min.js') }}"></script>
    
    <!-- Boostrap -->
    <script src="{{ asset('/plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Vendor JS Files -->
    <script src="{{ asset('/plugins/Appland/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/plugins/Appland/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/plugins/Appland/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('/plugins/Appland/vendor/aos/aos.js') }}"></script>

    <!-- Template Appland Main JS File -->
    <script src="{{ asset('/plugins/Appland/js/main.js') }}"></script>
@endsection

@section('content')
<div class="jumbotron" style="height: 360px; color: rgba(32, 33, 36, 1); background: #f2f5fa;">
  <div class="container">
    <div class="text-center" style="margin-top: 120px;" data-aos="zoom-in">
        <h1>Blogs</h1>
        <p>
            Dapatkan informasi seputar elektronik, review barang, tips-tips, kegiatan dan lainnya.
            Ada juga diskon, promo, giveaway dan bonus menarik lainnya.
        </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
      @for($i = 0; $i < 12; $i++)
          <div class="col-md-3">
              <div class="card shadow mb-5" style="cursor: default; border-radius: 25px" data-aos="fade-up" data-aos-delay="{{ $i*100+100 }}">
                  <div
                      class="card-img-top"
                      style="background-image: url(''); background-color: #fff; background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; height: 175px;"
                  ></div>
                  <div class="card-body">
                      <h5 class="card-title text-capitalize text-truncate">
                          judul blog muncul disini
                      </h5>
                      <p class="card-text">
                          Muncul descripsi bbrpa disnis
                          <br/>
                          <i class="text-capitalize text-monospace font-italic" style="font-size: 12px"> 
                              <mark>
                                Kategori
                              </mark>
                          </i>
                          <br/>
                          <i class="text-monospace font-italic" style="font-size: 12px"> 
                              created_at
                          </i>
                      </p>
                      <a href="/blog/1" class="btn btn-sm btn-outline-primary font-italic">
                          selengkapnya
                      </a>
                  </div>
              </div>
          </div>
      @endfor
  </div>
</div>
@endsection