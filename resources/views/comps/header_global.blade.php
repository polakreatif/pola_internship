<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="{{ url('/') }}">{{ $setting->app_name }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>    

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="get-started"><a href="{{ url('/') }}">Home</a></li>
        <li class="get-started"><a href="{{ url('/login') }}">Masuk</a></li>
        <li class="get-started"><a href="{{ url('/register') }}">Daftar</a></li>
      </ul>
    </nav>

  </div>
</header>