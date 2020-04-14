<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Custom Head -->
  @yield('head')

  <!-- Default Head -->
  <title>
    ShopTronik | Dashboard
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

  <!-- Styles -->
  <link href="{{ asset('/assets/css/scrollbar.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Admin Navbar -->
    @include('components.admin.navbar')

    <!-- Main Sidebar Container -->
    @include('components.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header -->
      <div class="content-header">
        @yield('content-header')  
      </div>

      <!-- Content -->
      <section class="content">
        @yield('content')
      </section>

    </div><!-- End Content Wrapper -->

  </div> <!-- End Wrapper -->

  <!-- Main Footer  -->
  @include('components.admin.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add Script -->
  @yield('script')
  
</body>
</html>