<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head >
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ShopTronik | Toko Elektornik Terlengkap Dijamin Ori</title>

  <!-- Font Awwsome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free-5.12.1-web/css/all.min.css">

  <!-- Vendor Css -->
  <link rel="stylesheet" href="/plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link href="/plugins/Appland/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/plugins/Appland/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/plugins/Appland/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/plugins/Appland/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/plugins/Appland/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Appland Main CSS File -->
  <link href="/plugins/Appland/assets/css/style.css" rel="stylesheet">

  <!-- Template Ninestars Main CSS File -->
  <link href="/plugins/Ninestars/assets/css/style.css" rel="stylesheet">

  <!-- Template AdminLTE CSS File -->
  <link href="/plugins/AdminLTE-master/dist/css/adminlte.min.css" rel="stylesheet">


</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">ShopTronik</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <div class="mx-auto d-none d-md-block">
        <div class="search-bar">
            <form class="shadow" action="" method="post">
              <input  type="text" name="name" placeholder="Cari produk....">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
      </div>
      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="d-block d-md-none">
            <a href="#">
              <div class="search-bar">
                <form class="shadow" action="" method="post">
                  <input  type="text" name="name" placeholder="Cari produk....">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </a>
          </li>

          <li class="active">
            <a href="#header">

            </a>
          </li>
            

          <li class="get-started-login"><a href="/login">Masuk</a></li>
          <li class="get-started"><a href="/register">Daftar</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>App landing page template</h1>
            <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
            <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
            <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="/plugins/Appland/assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- Products Discount -->
    <section id="products-discount">
      <div class="container">
        <h2 data-aos="fade-up">Produck Diskon</h2>
        <br/>

        <div class="row justify-content-start">
          <div class="col-3">
            <div class="card " data-aos="fade-up">
              <div class="position-relative">
                  <div class="ribbon-wrapper ribbon-xl">
                    <div class="ribbon bg-danger text-xl">
                      30%
                    </div>
                  </div>
                  <img 
                    src="/plugins/Ninestars/assets/img/portfolio/portfolio-9.jpg" 
                    class="card-img-top" 
                    alt="..."
                  >
              </div>
              
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on 
                  the card title and make up the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    <section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pembelian</h2>
          <p>Dapatkan barang, Cukup empat langkah.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Pesan</a></h4>
              <p class="description">
                Cari produk elektronik kebutuhanmu. Masukan keranjang dulu atau langsung pilih tombol beli.
                Ikuti langkah-langkah nya sampai selesai.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Bayar</a></h4>
              <p class="description">
                Bayar pesanan kamu sesuai metode pembayaran yang kamu pilih.
                Jangan lupa simpan/screenshot bukti pembayaran.
                Lalu periksa status barang kamu di website.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Pengiriman</a></h4>
              <p class="description">
                Barang kamu akan segera dikirim oleh pihak kami sesuai jadwal pengiriman.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Selesai</a></h4>
              <p class="description">
                Pengirim akan menghubungi kamu jika telah sampai. Proses pembelian selesai.
                Jangan lupa update status pembelian.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Testimoni</h2>
        <p>
          Jutaan pelanggan di seluruh Indonesia telah puas membeli produk di ShopTronik. Lihat apa kata mereka..
        </p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="/plugins/Appland/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Adam Ziber</h3>
            <h4>Lampung</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Produk lengkap, barang ori, fast respon. The best pokoknya.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/plugins/Appland/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Taka Sunggu D</h3>
              <h4>Minahasa</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Barang sesuai pesanan, produk ori, pengiriman tepat waktu. Thx ka.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/plugins/Appland/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Lilian Ratu</h3>
              <h4>Jakarta Timur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Awalnya ragu buat beli barang online. Tapi stlh banyak rekomendasi ShopTronik dari temen, Akhirnya beli disini.
                Pelayanan ramah, fast respon, barang sampai sesuai pesanan.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/plugins/Appland/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Wawan Jauhardi</h3>
              <h4>Temanggung</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Banyak diskonnya, produk elektronik terlengkap. Recommended pokoknya.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/plugins/Appland/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Devita Amalia Putri</h3>
              <h4>Aceh Utara</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pelayanan Ok, banyak pilihan, produk lengkap, barang Ori, 
                  Banyak promo dan diskon. Recommeded buat beli barang elektronik.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->


    
  </main>


  
  <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Ikuti Buletin Kami</h4>
            <p>
              Dapatkan informasi seputar elektronik, review barang, tips-tips, kegiatan dan lainnya.
              Ada juga diskon, promo, giveaway dan bonus menarik lainnya.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>ShopTronik</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Ikuti Sosial Media Kami :</h4>
            <p>Jangan sampai ketinggalan! Dapatkan info diskon, promo, giveaway dan bonus menarik lainnya.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
  <!-- Font Awesome -->
  <script src="/plugins/fontawesome-free-5.12.1-web/js/all.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="/plugins/Appland/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/plugins/Appland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/plugins/Appland/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/plugins/Appland/assets/vendor/php-email-form/validate.js"></script>
  <script src="/plugins/Appland/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/plugins/Appland/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/plugins/Appland/assets/vendor/aos/aos.js"></script>

  <!-- Template Appland Main JS File -->
  <script src="plugins/Appland/assets/js/main.js"></script>
  
  <!-- Template Ninestars Main JS File -->
  <!-- <script src="plugins/Ninestars/assets/js/main.js"></script> -->

</body>
</html>