@extends('layouts.default')

@section('head')
    <title> SHopTronik | Title </title>
    <meta 
        name="description" 
        content="SHopTronik. desc"
    >

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
    
    <div class="col-12 col-md-6" data-aos="fade-up">

      <div class="tab-content" id="pills-tabContent">
        <div 
          class="tab-pane fade show active shadow" 
          id="pills-home" 
          role="tabpanel" 
          aria-labelledby="pills-home-tab"
          style="
            background-image: url('{{ asset('media/01.jpg') }}'); 
            background-color: #fff; 
            background-position: center; 
            background-size: contain; 
            background-repeat: no-repeat; 
            width: 100%; height: 350px;
            border-radius: 15px; 
          "
        ></div>
        <div 
          class="tab-pane fade shadow" 
          id="pills-profile" 
          role="tabpanel" 
          aria-labelledby="pills-profile-tab"
          style="
            background-image: url('{{ asset('media/02.jpg') }}'); 
            background-color: #fff; 
            background-position: center; 
            background-size: contain; 
            background-repeat: no-repeat; 
            width: 100%; height: 350px;
            border-radius: 15px; 
          "
        ></div>
        <div 
          class="tab-pane fade shadow" 
          id="pills-contact" 
          role="tabpanel" 
          aria-labelledby="pills-contact-tab"
          style="
            background-image: url('{{ asset('media/03.jpg') }}'); 
            background-color: #fff; 
            background-position: center; 
            background-size: contain; 
            background-repeat: no-repeat; 
            width: 100%; height: 350px;
            border-radius: 15px; 
          "
        ></div>
      </div>

      <br/>

      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item border shadow mx-2">
          <a class="nav-link active" 
            id="pills-home-tab" 
            data-toggle="pill" 
            href="#pills-home" 
            role="tab" 
            aria-controls="pills-home" 
            aria-selected="true"
            style="
              background-image: url('{{ asset('media/01.jpg') }}'); 
              background-color: #fff; 
              background-position: center; 
              background-size: contain; 
              background-repeat: no-repeat; 
              width: 50px; height: 50px;
              border-radius: 15px; 
            "
          ></a>
        </li>
        <li class="nav-item border shadow mx-2">
          <a class="nav-link" 
            id="pills-profile-tab" 
            data-toggle="pill" 
            href="#pills-profile" 
            role="tab" 
            aria-controls="pills-profile" 
            aria-selected="false"
            style="
              background-image: url('{{ asset('media/02.jpg') }}'); 
              background-color: #fff; 
              background-position: center; 
              background-size: contain; 
              background-repeat: no-repeat; 
              width: 50px; height: 50px;
              border-radius: 15px; 
            "
          ></a>
        </li>
        <li class="nav-item border shadow mx-2">
          <a 
            class="nav-link" 
            id="pills-contact-tab" 
            data-toggle="pill" 
            href="#pills-contact" 
            role="tab" 
            aria-controls="pills-contact" 
            aria-selected="false"
            style="
              background-image: url('{{ asset('media/03.jpg') }}'); 
              background-color: #fff; 
              background-position: center; 
              background-size: contain; 
              background-repeat: no-repeat; 
              width: 50px; height: 50px;
              border-radius: 15px; 
            "
          ></a>
        </li>
      </ul>

    </div>

    <div class="col-12 col-md-6" data-aos="fade-up">
      <h1> Nama Produk </h1>
      <h4> Rp. 199.000 </h4>
      <br/>
      <h5> Brand : Oppo </h5>
      <h5> Warna : Hitam </h5>
      <br/>
      <h6>#ppp #llll</h6>
      <br/>

      <div class="row justify-content-center">
        <div class="col-6">
          <button
            type="butto"
            class="btn btn-primary w-100"
            style="border-radius: 15px;"
          >
            Beli
          </button>
        </div>
        <div class="col-6">
          <button
            type="button"
            class="btn btn-warning w-100 text-white"
            style="border-radius: 15px;"
          >
            <i class="fas fa-dolly-flatbed"></i>
          </button>
        </div> 
        
      </div>
    </div>
  </div>

  <br/><br/>
  <div style="min-height: 250px;" data-aos="fade-up"> 

    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Diskusi</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Review</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Deskripsi bla bla</div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Diskusi bla bla</div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">review bla bla</div>
    </div>

  </div>
</div>
@endsection