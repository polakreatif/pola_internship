<div id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-6 pt-5 order-2 order-lg-1 text-center">
        <h1 data-aos="zoom-in" data-aos-delay="0">{{ $jumbotron->title }}</h1>
        @if(strlen($jumbotron->caption) > 0)
          <h2 data-aos="zoom-in" data-aos-delay="100">
            {{ $jumbotron->caption }} 
          </h2>
        @endif
        <a href="{{ url('/order') }}" class="btn-get-started scrollto" data-aos="zoom-in" data-aos-delay="200">Pesan Jasa</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img data-aos="zoom-in" data-aos-delay="0" src="{{ asset('storage/'. $jumbotron->image) }}" class="img-fluid shadow animated" alt="" style="border-radius: 15px;">
        @if(strlen($jumbotron->sumber_link) > 0)
          <div class="d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <a href="https://{{ $jumbotron->sumber_link }}" target="_blank">{{ $jumbotron->sumber_label }}</a>
          </div>
        @endif
      </div>
    </div>
  </div> 
</div>