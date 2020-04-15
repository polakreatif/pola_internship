@extends('layouts.home')

@section('head')
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
@endsection

@section('jumbotron')
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>ShopTronik</h1>
            <h2>
              Toko Elektronik terlengkap, terpercaya, dijamin ORI.
            </h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{ asset('/media/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection

@section('kategori_pilihan')
<section class="section-bg">
  <div class="container-fluid">
    <div>
        <div data-aos="fade-up">
          <span class="h4">Kategori Pilihan</span>
        </div>

        <div  class="w-100 my-3">
          <div id="scrollbar-2" class="d-flex" style="overflow-x: auto; overflow-y: hidden;">
            @for($i = 0; $i < 5; $i++)
              <div class="mb-5 mx-3" data-aos="fade-up">

                  <div 
                    id="kategori-detail" 
                    class="card shadow" 
                    style="
                      border-radius: 15px;
                      width: 150px; 
                      height: 150px;
                      margin-top: 15px;
                      margin-left: 15px;
                    "
                  ></div>
                  <div
                    id="kategori-media" class="card shadow"
                    style="
                      background-image: url('media/0{{ $i*1+1 }}.jpg'); 
                      background-color: #fff; background-position: center; 
                      background-size: contain; background-repeat: no-repeat; 
                      width: 150px; height: 150px;
                      border-radius: 15px;
                      margin-top: -165px; 
                      "
                  ></div>
                  

              </div>
            @endfor  
          </div>
        </div>

    </div>
  </div>
</section>
@endsection

@section('flash_sale')
<section class="section-bg" >
  <div  class="w-100 my-3 p-3" style="background: linear-gradient(45deg, #FE6B8B 30%, #FF8E53 90%);">
    <div class="d-flex text-white mb-3">
      <h4 class="text-bold">Flash Sale</h4>
      <div class="ml-3 px-3 bg-dark" style="border-radius: 15px;">
        <h4 id="timer"></h4>
      </div> 
    </div>
    <div id="scrollbar-3" class="d-flex" style="overflow-x: auto; overflow-y: hidden;">
      @for($i = 0; $i < 5; $i++)
        <div class="col-8 col-sm-4 col-md-3 col-lg-2 mb-3" data-aos="fade-up">
          
          <a href="/p/slug" class="card shadow" style="border-radius: 25px;">
            
            <div id="produk-media" class="position-relative" style="border-radius: 15px;">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-danger text-white text-lg">
                  Sale of 30%
                </div>
              </div>
              <div
                style="
                  background-image: url('media/0{{ $i*1+1 }}.jpg'); 
                  background-color: #fff; background-position: center; 
                  background-size: contain; background-repeat: no-repeat; 
                  width: 100%; height: 150px;"
              ></div>
            </div>

            <div id="produk-detail" class="card-body">
              <h6>Name of product</h6>
              <mark>Rp. 19.000</mark>
            </div>

          </a>

        </div>
      @endfor  
    </div>
  </div>
</section>
@endsection

@section('produk_terlaris')
<section class="section-bg">
  <div class="container-fluid">
    <div class="card w-100 shadow" style="border-radius: 15px;">
      <div class="card-body">
        
        <div data-aos="fade-up">
          <span class="h4">Produk Terlaris</span>
        </div>

        <div  class="w-100 my-3">
          <div id="scrollbar-1" class="d-flex" style="overflow-x: auto; overflow-y: hidden;">
            @for($i = 0; $i < 5; $i++)
              <div class="col-8 col-md-4 col-lg-3 mb-3" data-aos="fade-up">
                
                <a href="/p/slug" class="card shadow" style="border-radius: 25px;">
                  
                  <div id="produk-media" style="border-radius: 15px;">
                    <div
                      style="
                        background-image: url('media/0{{ $i*1+1 }}.jpg'); 
                        background-color: #fff; background-position: center; 
                        background-size: contain; background-repeat: no-repeat; 
                        width: 100%; height: 150px;"
                    ></div>
                  </div>

                  <div id="produk-detail" class="card-body">
                    <h6>Name of product</h6>
                    <mark>Rp. 19.000</mark>
                  </div>

                </a>

              </div>
            @endfor  
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection

@section('produk_terbaru')
<section class="section-bg">
  <div class="container-fluid">
    <div class="card w-100 shadow" style="border-radius: 15px;">
      <div class="card-body">
        
        <div data-aos="fade-up">
          <span class="h4">Produk Terbaru</span>
        </div>

        <div  class="w-100 my-3">
          <div id="scrollbar-1" class="d-flex" style="overflow-x: auto; overflow-y: hidden;">
            @for($i = 0; $i < 5; $i++)
              <div class="col-8 col-md-4 col-lg-3 mb-3" data-aos="fade-up">
                
                <a href="/p/slug" class="card shadow" style="border-radius: 25px;">
                  
                  <div id="produk-media" style="border-radius: 15px;">
                    <div
                      style="
                        background-image: url('media/0{{ $i*1+1 }}.jpg'); 
                        background-color: #fff; background-position: center; 
                        background-size: contain; background-repeat: no-repeat; 
                        width: 100%; height: 150px;"
                    ></div>
                  </div>

                  <div id="produk-detail" class="card-body">
                    <h6>Name of product</h6>
                    <mark>Rp. 19.000</mark>
                  </div>

                </a>

              </div>
            @endfor  
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection

@section('pembelian')
<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title" data-aos="zoom-in">
      <h2>Pembelian</h2>
      <p>Cukup empat langkah, dapatkan barang impianmu.</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-dolly-flatbed fa-4x"></i></div>
          <br/>
          <h4 class="title"><a href="">Pesan</a></h4>
          <p class="description">
            Cari produk elektronik kebutuhanmu. Masukan keranjang dulu atau langsung pilih tombol beli.
            Ikuti langkah-langkah nya sampai selesai.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-money-bill-wave fa-4x"></i></div>
          <br/>
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
          <div class="icon"><i class="fas fa-shipping-fast fa-4x"></i></div>
          <br/>
          <h4 class="title"><a href="">Pengiriman</a></h4>
          <p class="description">
            Barang kamu akan segera dikirim oleh pihak kami sesuai jadwal pengiriman.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-check fa-4x"></i></div>
          <br/>
          <h4 class="title"><a href="">Selesai</a></h4>
          <p class="description">
            Pengirim akan menghubungi kamu jika telah sampai. Proses pembelian selesai.
            Jangan lupa update status pembelian.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection

@section('brands')
<section id="clients" class="clients section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2></h2>
      <p></p>
    </div>

    <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
      <img src="{{ asset('/media/client-1.png') }}" alt="">
      <img src="{{ asset('/media/client-2.png') }}" alt="">
      <img src="{{ asset('/media/client-3.png') }}" alt="">
      <img src="{{ asset('/media/client-4.png') }}" alt="">
      <img src="{{ asset('/media/client-5.png') }}" alt="">
      <img src="{{ asset('/media/client-6.png') }}" alt="">
      <img src="{{ asset('/media/client-7.png') }}" alt="">
      <img src="{{ asset('/media/client-8.png') }}" alt="">
    </div>

  </div>
</section>
@endsection

@section('testimonials')
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <p>
          Jutaan pelanggan di seluruh Indonesia telah puas membeli produk di ShopTronik. Lihat apa kata mereka..
        </p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="{{ asset('/media/testimonials-1.jpg') }}" class="testimonial-img" alt="">
            <h3>Adam Ziber</h3>
            <h4>Lampung</h4>
            <p>
              <i class="bx bxs-quote-alt-left fas fa-quote-left"></i>
              Produk lengkap, barang ori, fast respon. The best pokoknya.
              <i class="bx bxs-quote-alt-right fas fa-quote-right"></i>
            </p>
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="{{ asset('/media/testimonials-2.jpg') }}" class="testimonial-img" alt="">
            <h3>Taka Sunggu D</h3>
            <h4>Minahasa</h4>
            <p>
              <i class="bx bxs-quote-alt-left fas fa-quote-left"></i>
              Barang sesuai pesanan, produk ori, pengiriman tepat waktu. Thx ka.
              <i class="bx bxs-quote-alt-right fas fa-quote-right"></i>
            </p>
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="{{ asset('/media/testimonials-3.jpg') }}" class="testimonial-img" alt="">
            <h3>Lilian Ratu</h3>
            <h4>Jakarta Timur</h4>
            <p>
              <i class="bx bxs-quote-alt-left fas fa-quote-left"></i>
              Awalnya ragu buat beli barang online. Tapi stlh banyak rekomendasi ShopTronik dari temen, Akhirnya beli disini.
              Pelayanan ramah, fast respon, barang sampai sesuai pesanan.
              <i class="bx bxs-quote-alt-right fas fa-quote-right"></i>
            </p>
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="{{ asset('/media/testimonials-4.jpg') }}" class="testimonial-img" alt="">
            <h3>Wawan Jauhardi</h3>
            <h4>Temanggung</h4>
            <p>
              <i class="bx bxs-quote-alt-left fas fa-quote-left"></i>
              Banyak diskonnya, produk elektronik terlengkap. Recommended pokoknya.
              <i class="bx bxs-quote-alt-right fas fa-quote-right"></i>
            </p>
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="{{ asset('/media/testimonials-5.jpg') }}" class="testimonial-img" alt="">
            <h3>Devita Amalia Putri</h3>
            <h4>Aceh Utara</h4>
            <p>
              <i class="bx bxs-quote-alt-left fas fa-quote-left"></i>
                Pelayanan Ok, banyak pilihan, produk lengkap, barang Ori, 
                Banyak promo dan diskon. Recommeded buat beli barang elektronik.
              <i class="bx bxs-quote-alt-right fas fa-quote-right"></i>
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection

@section('faq')
  <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">

          <h2>Frequently Asked Questions</h2>
          <p></p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="fas fa-angle-up icon-show"></i><i class="fas fa-angle-down icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="fas fa-angle-up icon-show"></i><i class="fas fa-angle-down icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="fas fa-angle-up icon-show"></i><i class="fas fa-angle-down icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fas fa-angle-up icon-show"></i><i class="fas fa-angle-down icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fas fa-angle-up icon-show"></i><i class="fas fa-angle-down icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
@endsection

@section('customer_service')
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Customer Service</h2>
        <p></p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 info" data-aos="fade-up">
              <i class="bx bx-map"></i>
              <h4>Address</h4>
              <p>A108 Adam Street,<br>New York, NY 535022</p>
            </div>
            <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-phone"></i>
              <h4>Call Us</h4>
              <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
            </div>
            <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-envelope"></i>
              <h4>Email Us</h4>
              <p>contact@example.com<br>info@example.com</p>
            </div>
            <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-time-five"></i>
              <h4>Working Hours</h4>
              <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
            <div class="form-group">
              <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
@endsection