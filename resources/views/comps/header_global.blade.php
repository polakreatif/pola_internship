<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="{{ url('/') }}">{{ $setting->app_name }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>    

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        @guest
          <li class="get-started"><a href="{{ url('/') }}">Home</a></li>
          <li class="get-started"><a href="{{ url('/login') }}">Masuk</a></li>
          <li class="get-started"><a href="{{ url('/register') }}">Daftar</a></li>
        @else
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/order') }}">Pesan Jasa</a></li>
          <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
            <ul>
              <li><a href="{{ url('/my-order') }}">Pesanan Saya</a>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Keluar') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </li>
        @endguest
        
      </ul>
    </nav>

  </div>
</header>