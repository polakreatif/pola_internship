<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Custom Head -->
    @yield('head')

    <!-- Default Title -->
    <title>
      Laundry Jone | Profesional Laundry
    </title>
    <meta 
      content="Laundry Jone | Profesional Laundry" 
      name="descriptison"
    >
    <meta 
      content="Laundry Jone | Profesional Laundry" 
      name="keywords"
    >

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
</head>
<body>
    <!-- Header -->
    @include('comp.header')

    <!-- Hero -->
    @yield('hero')

    <main id="main">
      @yield('about_us')
      
      @yield('carousel')
      
      @yield('products')
      
      @yield('blog')

      @yield('testimonials')

      @yield('faq')

      @yield('customer_service')
    </main>

    @include('comp.footer')

    <!-- Back to Top -->
    <a href="#" class="text-center back-to-top">
      <i class="fas fa-angle-double-up fa-lg"></i>
    </a>


    <script src="{{ asset('vendor/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>