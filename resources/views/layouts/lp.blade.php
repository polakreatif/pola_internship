<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">

</head>
<body class="landing-page-bg">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-transparents">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Center Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Layanan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Portofolio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Karir</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Artikel</a>
                          </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <section class="" id="header">
                @yield('header')
            </section>

            <img src="svg/header.svg" alt="">

            <section class="" id="service">
                @yield('service')
            </section>

            <section class="" id="portofolio">
                @yield('portofolio')
            </section>

            <section class="" id="Career">
                @yield('career')
            </section>

            <section class="" id="artikel">
                @yield('artikel')
            </section>

            
            <img src="svg/footer.svg" alt="">
        </main>
        
        <footer class="footer p-5">
            Ini Footer
        </footer>
    </div>
</body>
</html>
