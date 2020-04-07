<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Andipputra Photography') }}</title>

    <!-- Custom Fonts -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Styles -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset('css/andipputra.css')}}">

</head>
<body>
    <div id="app" class="text-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../#portofolio">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../#artikel">Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header>
            @yield('header')
        </header>

        <section class="artikel" id="artikel">
            @yield('artikel')
        </section>
    
        <section class="about" id="about">
            @yield('about')
        </section>

        <section class="service" id="service"> 
            @yield('service')
        </section>

        <section class="portofolio" id="portofolio">
            @yield('portofolio')
        </section>
        
        <footer class="footer">
            <div class="footer bg-white">
                <div class="container d-flex text-center">
                    <div class="container">
                        <div class="adress">
                            <h5>Alamat Kami</h5>
                            <iframe width="100%" height="100%"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9404.102928581575!2d110.41376237335024!3d-7.68977960945305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ea3d4edc82f%3A0x1bc7876343de2757!2zN8KwNDEnMzUuNiJTIDExMMKwMjUnMTIuMCJF!5e0!3m2!1sid!2sid!4v1585278507298!5m2!1sid!2sid"></iframe>
                            <p>Jl. Murai nomor 5 Perumahan Kavling UII, Ngaglik Sleman</p>
                        </div>
                    </div>
                    <div class="container">
                        <h5 class="display-5">Kamu dapat menghubungi kami di :</h5>
                        <br>
                        <br>
                        <br>
                        <ul class="list-inline mb-5">
                        <li class="list-inline-item">
                            <a class="social-link rounded-circle text-light mr-3" href="https://www.facebook.com/andipp21">
                            <i class="icon-social-facebook h-100"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-link rounded-circle text-light mr-3" href="https://twitter.com/andipp21">
                            <i class="icon-social-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-link rounded-circle text-light mr-3" href="https://www.linkedin.com/in/andipputra">
                            <i class="icon-social-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-link rounded-circle text-light" href="https://www.instagram.com/andipputraa/">
                            <i class="icon-social-instagram"></i>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/andipputra.js"></script>
</body>
</html>
