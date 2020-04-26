<div id="about-us" class="row">
  <div class="col-12 col-sm-8 col-lg-6 text-center mb-3" data-aos="fade-up">
    <div
      class="about-us-img shadow"
      style="
        background-image: url('{{ asset('storage/'.$about_us->image) }}');
      "
    ></div>
    @if(strlen($about_us->sumber_link) > 0)
      <div class="d-flex justify-content-start">
        <a href="https://{{ $about_us->sumber_link }}" target="_blank">{{ $about_us->sumber_label }}</a>
      </div>
    @endif
  </div>
  <div class="col-12 col-sm-8 col-lg-6 d-flex flex-column align-items-stretch  justify-content-center" data-aos="fade-up">
      <div class="text-center">
        @if(strlen($about_us->title) > 0)
          <h2>{{ $about_us->title }}</h2>
        @endif
        <p>{{ $about_us->description }}</p>
      </div>
    
  </div>
</div>