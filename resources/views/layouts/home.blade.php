<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head >
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Custom Head -->
  @yield('head')

  <!-- Default Head -->
  <title>
    ShopTronik | Toko Elektornik Terlengkap Dijamin Ori
  </title>
  <meta 
    content="ShopTronik | Toko Elektornik Terlengkap Dijamin Ori" 
    name="descriptison"
  >
  <meta 
    content="ShopTronik | Toko Elektornik Terlengkap Dijamin Ori" 
    name="keywords"
  >

  <!-- Favicons -->
  <link href="{{ asset('/favicon.png') }}" rel="icon">
  <link href="{{ asset('/favicon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Fontawesome -->
  <link href="{{ asset('/plugins/Fontawesome/css/all.min.css') }}" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="{{ asset('/plugins/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Appland Vendor Css -->
  <link href="{{ asset('/plugins/Appland/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/plugins/Appland/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('/plugins/Appland/vendor/aos/aos.css') }}" rel="stylesheet">
  
  <!-- Template Appland Main CSS File -->
  <link href="{{ asset('/plugins/Appland/css/style.css') }}" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('/assets/css/scrollbar.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
  
</head>
<body>
  
  <!-- Header -->
  @include('components.header')

  <!-- Jumbotron -->
  @yield('jumbotron')

  <main id="main">

    <!-- Kategori Pilihan -->
    @yield('kategori_pilihan')

    <!-- Kategori Pilihan -->
    @yield('flash_sale')

    <!-- Product Diskon -->
    @yield('produk_diskon')

    <!-- Cara Pembelian -->
    @yield('pembelian')

    <!-- Testimonials -->
    @yield('testimonials')

    <!-- Frequently Asked Question -->
    @yield('faq')

    <!-- Customer Service -->
    @yield('customer_service')
  </main>

  <!-- Footer -->
  @include('components.footer')

  <!-- Back to Top -->
  <a href="#" class="text-center back-to-top">
    <i class="fas fa-angle-double-up fa-lg"></i>
  </a>

  <!-- JQuery -->
  <script src="{{ asset('/plugins/Appland/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/plugins/Appland/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  
  <!-- Font Awesome -->
  <script src="{{ asset('/plugins/Fontawesome/js/all.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('/plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Vendor Appland JS Files -->
  <script src="{{ asset('/plugins/Appland/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/plugins/Appland/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/plugins/Appland/vendor/aos/aos.js') }}"></script>

  <!-- Template Appland Main JS File -->
  <script src="{{ asset('/plugins/Appland/js/main.js') }}"></script>
  
</body>
</html>