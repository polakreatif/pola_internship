<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{ asset('favicon.ico') }}" rel="icon">
  <link href="{{ asset('favicon.ico') }}" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/jqvmap/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.css') }}">

  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

   <!-- Custom Head -->
  @yield('head')
  <style>
    .btn-theme {
      border-radius: 15px;
      background: #28a745;
      color: #fff;
    }

    .btn-theme:hover {
      color: rgba(0,0,0,1);
      border: 1px solid rgba(0,0,0,1);
      background: #fff;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      transition: background 0.2s ease-in-out;
    }

    .about-us-img {
      background-color: #fff;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      border-radius: 15px;
      height: 150px;
      width: 100%;
    }

    .carousel-img {
      background-color: #fff;
      background-repeat: : no-repeat;
      background-size: cover;
      background-position: center;
      border-radius: 15px;
      height: 150px;
      width: 100%;
    }

    .product-card-img {
      background-color: #fff;
      background-repeat: no-repeat;
      background-position: center;
      background-size: contain;
      border-top-right-radius: 15px;
      border-top-left-radius: 15px;
      height: 100px;
      width: 100%;
    }

    .product-card-name {
      font-size: 12px;
      font-weight: bold;
    }

    .product-card-price {
      font-size: 12px;
    }

    .product-show-img {
      background-color: #fff;
      background-repeat: no-repeat;
      background-position: center;
      background-size: contain;
      border-radius: 15px;
      height: 150px;
      width: 100%;
    }

    @media (min-width: 576px) {
      .about-us-img {
        height: 250px;
      }
      .carousel-img {
        height: 250px;
      }
      .product-card-img {
        height: 200px;
      }
      .product-card-name {
        font-size: 19px;
      }
      .product-card-price {
        font-size: 16px;
      }
      .product-show-img {
        height: 350px;
      }
    }

    @media (min-width: 768px) {
      .about-us-img {
        height: 350px;
      }
      .carousel-img {
        height: 350px;
      }
    }

    @media (min-width: 992px) {
      .carousel-img {
        height: 450px;
      }
    }

    @media (min-width: 1200px) {
     .carousel-img {
        height: 550px;
      }
      .product-show-img {
        height: 500px;
      }
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @yield('nav')

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

  @yield('footer')

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
  <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

  <script src="{{ asset('js/adminlte.js') }}"></script>
  
</body>
</html>