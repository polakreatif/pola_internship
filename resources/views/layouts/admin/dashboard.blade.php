<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
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
  <link href="{{ asset('favicon.ico') }}" rel="icon">
  <link href="{{ asset('favicon.ico') }}" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/jqvmap/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.css') }}">

  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Admin Navbar -->
    @include('comp.admin.header')

    <!-- Main Sidebar Container -->
    @include('comp.admin.sidenav')

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
  @include('comp.admin.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/sparklines/sparkline.js') }}"></script>
  <script src="{{ asset('vendor/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('vendor/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <script src="{{ asset('vendor/jquery-knob/jquery.knob.min.js') }}"></script>
  <script src="{{ asset('vendor/moment/moment.min.js') }}"></script>
  <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

  <script src="{{ asset('js/adminlte.js') }}"></script>
  
</body>
</html>