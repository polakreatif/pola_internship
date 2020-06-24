<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ends fonts -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand">
                <img src="../frontend/images/logo.png" alt="THE FASHION logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id=navb>
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="/" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item dropdown position">
                        <a href="{{route('detail.index')}}" class="nav-link">
                            Produk
                        </a>
                        {{-- <div class="megamenu dropdown-menu" aria-labelledby="navbardrop">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="#" class="dropdown-item">
                                        <div class="card-produk-jenis" style="background-image: url('../frontend/images/sepatu1.jpg');"></div>
                                        <h5 class="text-dropdown" >Sepatu Laki</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="dropdown-item">
                                        <div class="card-produk-jenis" style="background-image: url('../frontend/images/sepatu2.jpg');"></div>
                                        <h5 class="text-dropdown" >Sepatu Wanita</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="dropdown-item">
                                        <div class="card-produk-jenis" style="background-image: url('../frontend/images/sepatu3.jpg');"></div>
                                        <h5 class="text-dropdown" >Sepatu Anak - Anak</h5>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="{{route('displaykeranjang.index')}}" class="nav-link">Keranjang
                            <span class="badge">( {{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }} )</span>
                        </a>
                    </li>

                    @guest
                        <li class="nav-item mx-md-2">
                            <a href="/login" class="nav-link">
                                Akun Saya
                            </a>
                        </li>   
                    @endguest

                    @auth
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarout" data-toggle="dropdown">
                                Halo, {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarout" data-toggle="dropdown">
                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit" >Keluar</button>
                                </form>
                            </div>
                        </li> 
                    @endauth
                    
                </ul>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="section-footer">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h5 class="heading-footer">Fitur</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Produk</a></li>
                                <li><a href="#">Keranjang</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h5 class="heading-footer">Media Sosial</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Whatsapp</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h5 class="heading-footer">Kontak Kami</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">
                                        Jalan Kaliurang Km 14.5,
                                        <br>
                                        Kabupaten Sleman, Daerah
                                        <br>
                                        Istimewa Yogyakarta, Indonesia</a></li>
                                <li><a href="#">0821 - 9898 - 0981</a></li>
                                <li><a href="#">sbisyir74@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ url('frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
</body>

</html>