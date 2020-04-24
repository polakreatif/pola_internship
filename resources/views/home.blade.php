@extends('layouts.home')

@section('head')
  <title>{{ $setting->app_name }} | {{ $setting->app_slogan }}</title>
@endsection

@section('header')

  @include('comps.header', ['setting' => $setting])

@endsection

@section('hero')
  <div id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>{{ $jumbotron->title }}</h1>
              @if(strlen($jumbotron->caption) > 0)
                <h2>
                  {{ $jumbotron->caption }} 
                </h2>
              @endif
              
              <a href="#" class="btn btn-success px-5 py-1"><i class="bx bxl-play-store"></i> Pesan Jasa</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{ asset('storage/'. $jumbotron->image) }}" class="img-fluid" alt="">
          @if(strlen($jumbotron->sumber_link) > 0)
            <div class="d-flex justify-content-end">
              <a href="https://{{ $jumbotron->sumber_link }}" target="_blank">{{ $jumbotron->sumber_label }}</a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection

@section('about_us')
  <div class="container">
    @includeIf('comps.about_us', ['about_us' => $about_us])
  </div>
@endsection

@section('carousel')
  <div class="container">
    @includeIf('comps.carousel', ['all_carousel' => $all_carousel])
  </div>
@endsection

@section('products')
  <div>
    
  </div>
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
 <div class="container">
    @includeIf('comps.customer_service', ['other' => $other ])
 </div>
@endsection

@section('footer')
  <footer id="footer"> 
    @includeIf('comps.buletin', ['other' => $other ])

    @includeIf('comps.footer', ['other' => $other ])

    @includeIf('comps.footer_copyright')
  </footer>
@endsection