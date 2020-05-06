<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <!-- Custom Head -->
    @yield('head')
</head>
<body>
    <!-- Header -->
    @yield('header')

    <!-- Hero -->
    @yield('jumbotron')
    <br/><br/><br/>
    <main id="main">
        <br/><br/><br/>
      @yield('about_us')
        <br/><br/><br/>
        
      @yield('carousel')
        <br/><br/><br/>
      
      @yield('products')

      @yield('customer_service')
        <br/><br/><br/>
        
    </main>

    @yield('footer')

    <!-- Back to Top -->
    <a href="#" class="text-center back-to-top">
      <i class="fas fa-angle-double-up fa-lg"></i>
    </a>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>