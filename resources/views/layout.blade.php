<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>@yield('title')</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="font-family : sans-serif; font-weight:bolder">
    <div class="container ">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#maps">Maps</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex text-center text-dark">
    <div class="container">
      <div class="jumbotron bg-transparent">
        @yield('jumbotron')
      </div>
    </div>
  </header>

  <!-- About Us -->
  <section class="content-section text-justify" id="about">
    <div class="container d-flex">
      <div class="container">
        @yield('about-text')
      </div>
      <div class="container text-center">
        @yield('about-logo')
      </div>
    </div>
  </section>

  <!-- Service -->
  <section class="content-section text-center" id="service">
      <div class="container">
        @yield('service')
      </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container d-flex" style="border:rgb(0, 0, 0)">
      @yield('portfolio')
    </div>
  </section>

  <!-- Map -->
  <section id="maps" class="map text-center">
      <div class="container content-section-heading">
        <h2>Our Maps</h2>
      </div>
        @yield('maps')
  </section>

  <!-- Footer -->
  <footer class="footer text-center" id="contact">
    <div class="container">
      <br>
      <h2>You Can Contact Us On</h2>
      <br>
    </div>
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-dark mr-3" href="https://www.facebook.com/andipp21">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-dark mr-3" href="https://twitter.com/andipp21">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-dark mr-3" href="https://www.linkedin.com/in/andipputra">
            <i class="icon-social-linkedin"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-dark" href="https://www.instagram.com/andipputraa/">
            <i class="icon-social-instagram"></i>
          </a>
        </li>
      </ul>
      @yield('copyright')
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
