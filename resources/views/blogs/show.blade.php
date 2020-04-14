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
    <div class="text-center" style="margin-top: 60px;" data-aos="zoom-in">
        <h1>Peluncuran Produk baru, Iphone dan Xiomi bersaing</h1>
        <p >#product #apa, 12:02:200 12:00:01</p>
    </div>
  </div>
</div>

<div class="container">
    <div style="margin-top: -120px;">
        <div class="row justify-content-center">
            <div class="col-6" data-aos="fade-up">
                <div
                    class="shadow"
                    style="
                        border-radius: 1rem; 
                        background-image: url('/media/02.jpg'); 
                        background-color: #fff; 
                        background-position: center; 
                        background-size: contain; 
                        background-repeat: no-repeat; 
                        width: 100%; height: 400px;
                    "
                ></div>
            </div>
        </div>
    </div>
    
    <div>
        <p class="text-justify" style="white-space: pre-wrap;" data-aos="fade-up">
            description
        </p>
    </div>
    <br/><br/>
</div>
@endsection