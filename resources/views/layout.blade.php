<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>andipputra photogaphy @yield('title')</title>

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
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="mainNav" style="font-family : sans-serif; font-weight:bolder">
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
            <a class="nav-link js-scroll-trigger" href="#portofolio">Portofolio</a>
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
        <h1 class="display-4">Selamat Datang</h1>
        <p class="lead">Ini merupakan website dari Andipputra Photography</p>
      </div>
    </div>
  </header>

  <!-- About Us -->
  <section class="content-section text-justify" id="about">
    <div class="container d-flex">
      <div class="container">
        <h2 class="text-center">About Us</h2>
        <br>
        <p>
          Kami merupakan photographer yang berbasis di Jogjakarta, berdiri dari tahun 2018 kami telah banyak membantu mengabadikan momen-momen dihidup orang.
          Kami dapat melakukan photoshoot untuk graduation, wedding, prewedding, dan acara berharga kalian lainnya.
        </p>
      </div>
      <div class="container text-center">
        <img src="img/logo.png" alt="" height="150">
      </div>
    </div>
  </section>

  <!-- Service -->
  <section class="content-section text-center" id="service">
      <div class="container">
        <h2>OUR SERVICE</h2>
        <br>
        <div class="card-deck" >
          <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <img class="card-img-top" src="img/group.jpg" alt="Card image cap" >
            <div class="card-body">
              <h5 class="card-title">Group Photoshoot </h5>
            </div>
          </div>
          <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <img class="card-img-top" src="img/graduation.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Graduation Photoshoot</h5>
            </div>
          </div>
          <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <img class="card-img-top" src="img/photoshoot.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Produk Photoshoot</h5>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container d-flex" style="border:rgb(0, 0, 0)">
      <div class="container text-center">
        <div class="content-section-heading">
          <h2 class="text-dark">Portfolio Photo </h2>
          <br>
        </div>
      </div>
      <div class="container" >
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/photoshoot.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/group.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/graduation.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Map -->
  <section id="contact" class="map text-center">
      <div class="container">
        <h2>Our Maps</h2>
        <br>
      </div>
      <div class="container bg-light" style="height:100%; width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
        <iframe width="100%" height="100%"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9404.102928581575!2d110.41376237335024!3d-7.68977960945305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ea3d4edc82f%3A0x1bc7876343de2757!2zN8KwNDEnMzUuNiJTIDExMMKwMjUnMTIuMCJF!5e0!3m2!1sid!2sid!4v1585278507298!5m2!1sid!2sid"></iframe>
        <br />
        
        <small>
          <a href="https://goo.gl/maps/cQhdxqBFzd1wZGTt8"></a>
        </small>
      </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
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
      <p class="text-muted small mb-0">Copyright &copy; andipputraphoto.com 2020</p>
      <p class="text-muted small mb-0">Template Stylish Portofolio</p>
      <p class="text-muted small mb-0">Header Photo by Adrian Pelletier on Unsplash</p>
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
