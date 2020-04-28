<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AndiPPutra Photography</title>

    <!-- Custom Fonts -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- custom style -->
    <link rel="stylesheet" href="{{ mix('css/andipputra.css')}}">

</head>
<body class=" bg-gray-200 leading-normal tracking-normal justify-center" style="font-family:'Baloo Bhaina 2';">
            <nav class="w-full flex items-center justify-between flex-wrap p-2 mx-auto bg-teal-700 mx-auto shadow-xl">
                <div class="flex-col inline-block w-full block flex-shrink lg:flex lg:items-center lg:w-auto mt-4 text-center mx-auto">
                    <div class="text-xl lg:flex-shrink text-white justify-center mx-auto">
                        <h2 class="text-center align-middle mx-auto">Halaman Dashboard</h2>
                    </div>
                </div>
            </nav>
            <main class="flex">
                <aside class="flex flex-col bg-white justify-between shadow w-1/6 min-h-full text-grey-darkest my-auto">
                    <a href="/jumbotrons"> Jumbotron </a>
                    <a href="/articles"> Artikel </a>
                    <a href="/portfolios"> Portofolio </a>
                    <a href="/services"> Service </a>
                    <a href="/careers"> career </a>
                </aside>

                <section class="container flex flex-col">
                    <section>
                        @yield('jumbotron')
                    </section>
    
                    <section>
                        @yield('artikel')
                    </section>
    
                    <section>
                        @yield('about')
                    </section> 
    
                    <section>
                        @yield('service')
                    </section>
    
                    <section>
                        @yield('portofolio')
                    </section>
                </section>

            </main>

            <footer class="flex bg-blue-300 text-gray-900">
                This is Footer
            </footer>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{mix('js/andipputra.js')}}"></script>
</body>
</html>
