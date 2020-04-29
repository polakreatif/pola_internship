@extends('layouts.home')

@section('head')
  <title>{{ $setting->app_name }} | {{ $setting->app_slogan }}</title>
@endsection

@section('header')

  @includeIf('comps.header', ['setting' => $setting])

@endsection

@section('jumbotron')
  @includeIf('comps.jumbotron', ['jumbotron' => $jumbotron])
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
  @if(count($products) > 0)
    <div class="container" id="jasa">
      <h2 data-aos="fade-up">Jasa Kami</h2>
      <br/>
      @includeIf('comps.products', ['products' => $products])
    </div>
  @endif
@endsection

@section('customer_service')
 <div class="container">
    @includeIf('comps.customer_service', ['other' => $other ])
 </div>
@endsection

@section('footer')
  <footer id="footer"> 
    @includeIf('comps.buletin', ['other' => $other ])
    <br/><br/><br/>

    @includeIf('comps.footer', ['other' => $other ])

    @includeIf('comps.footer_copyright')
  </footer>

  <a href="https://wa.me/{{ preg_replace('/^[0]/', '62', $user_admin->phone) }}?text=nama%20%3A%20%28nama%20anda%29%0Aemail%20%3A%20%28email%20anda%29%0Asubjek%20%3A%20%28keperluan%20anda%29" target="_blank" class="d-flex wa-cs px-3 justify-content-center">
      <p class="my-auto">
          <i class="fab fa-whatsapp fa-2x"></i>
      </p>   
      <p class="ml-2 my-auto" style="font-size: 14px;">Hubungi Kami</p>
  </a>
@endsection