<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="{{ url('/') }}">ShopTronik</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <div class="mx-auto d-none d-md-block">
      <div class="search-bar" data-aos="zoom-in">
          <form class="shadow" action="" method="post">
            <input  type="text" name="name" placeholder="Cari produk....">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
      </div>
    </div>
    

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="d-block d-md-none" data-aos="zoom-in">
          <a href="#">
            <div class="search-bar">
              <form class="shadow" action="" method="post">
                <input  type="text" name="name" placeholder="Cari produk....">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </a>
        </li>

        @if (Route::has('login'))
            @auth
                <li class="get-started-login" data-aos="zoom-in">
                  <a href="{{ url('/') }}">Home</a>
                </li>
                
                <li class="drop-down">
                  <a href="">{{ Auth::user()->name }}</a>
                  
                  <ul>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>

                  </ul>
                </li>
            @else
                <li class="get-started-login" data-aos="zoom-in">
                  <a href="{{ url('/login') }}">Masuk</a>
                </li>
                
                @if (Route::has('register'))
                  <li class="get-started" data-aos="zoom-in">
                    <a href="{{ url('/register') }}">Daftar</a>
                  </li>
                @endif
            @endauth
        @endif
      </ul>
    </nav>

  </div>
</header>