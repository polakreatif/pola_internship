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
<div class="container">
  <div style="height: 150px;"></div>
</div>

<div class="container">
  <div class="row">
    
    <div class="col-12 col-md-6">
      
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">01</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">02</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">0</div>
</div>

    </div>

  </div>
</div>
@endsection