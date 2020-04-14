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

  <!-- Styles -->
  <link href="{{ asset('/assets/css/scrollbar.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  @include('components.header')

  <main id="main">
  
    <!-- Content -->
    @yield('content')

  </main>

  <!-- Footer -->
  @include('components.footer')

  
  <!-- Back to Top -->
  <a href="#" class="text-center back-to-top">
    <i class="fas fa-angle-double-up fa-lg"></i>
  </a>
  
  <!-- Script -->
  @yield('script')  
</body>
</html>