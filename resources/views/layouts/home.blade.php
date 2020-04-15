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

  <!-- Template Ninestars Main CSS File -->
  <link href="{{ asset('/plugins/Ninestars/css/style.css') }}" rel="stylesheet">

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
    <!-- Brands -->
    @yield('brands')

    <!-- Kategori Pilihan -->
    @yield('kategori_pilihan')

    <!-- Flash Sale -->
    @yield('flash_sale')

    <!-- Produk Terlaris -->
    @yield('produk_terlaris')

    <!-- Produk Terbaru -->
    @yield('produk_terbaru')

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
  <!-- Bootstrap -->
  <script src="{{ asset('/plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Jquey Easing -->
  <script src="{{ asset('/plugins/Appland/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  
  <!-- Font Awesome -->
  <script src="{{ asset('/plugins/Fontawesome/js/all.min.js') }}"></script>

  <!-- Vendor Appland JS Files -->
  <script src="{{ asset('/plugins/Appland/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/plugins/Appland/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/plugins/Appland/vendor/aos/aos.js') }}"></script>

  <!-- Template Appland Main JS File -->
  <script src="{{ asset('/plugins/Appland/js/main.js') }}"></script>

  <!-- Template Appland Main JS File -->
  <script src="{{ asset('/plugins/Ninestars/js/main.js') }}"></script>

  <!-- Timer -->
  <script>
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("timer").innerHTML = days + ":" + hours + ":"
    + minutes + ":" + seconds + "";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("timer").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>

</body>
</html>