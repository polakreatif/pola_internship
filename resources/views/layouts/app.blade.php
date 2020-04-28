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
<body class="gradient leading-normal tracking-normal text-white justify-center" style="font-family:'Baloo Bhaina 2';">
    <div id="app" class="mx-auto">
        <!--Nav-->
        <nav class="w-full container flex items-center justify-between flex-wrap p-2 mx-auto">
            <div class="flex items-center flex-shrink-0  mr-6">
              <a href="../#" class="font-semibold text-3xl tracking-light text-white"> APP Photography </a>
            </div>
            <div class="block lg:hidden">
              <button class="flex items-center px-3 py-2 border rounded text-white border-gray-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div class=" inline-block w-full block flex-shrink lg:flex lg:items-center lg:w-auto mt-4">
              <div class="text-xl lg:flex-shrink text-white">
                <a href="../#artikel" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4">
                  Artikel
                </a>
                <a href="../#about" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4">
                  Abous Us
                </a>
                <a href="../#service" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4">
                  Service
                </a>
                <a href="../#portofolio" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white">
                  Portofolio
                </a>
              </div>
            </div>
        </nav>
        
        <header>
            @yield('header')
        </header>

        <section class="artikel bg-white" id="artikel">
            @yield('artikel')
        </section>
    
        <section class="about bg-white" id="about">
            @yield('about')
        </section>

        <section class="service bg-white" id="service"> 
            @yield('service')
        </section>

        <section class="portofolio bg-white" id="portofolio">
            @yield('portofolio')
        </section>
        
        <!-- Change the colour #f8fafc to match the previous section colour -->
        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                    <g class="wave" fill="white">
                        <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
                    </g>
                    <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                        <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                            <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>

        <footer class="footer">
            <div class="container mx-auto  px-8">

                <div class=" flex flex-col md:flex-row py-6">
                     
                    <div class="flex-1 text-center">
                        <p class="uppercase text-white md:mb-6">Hubungi Kami di </p>
                        <ul class="list-reset mb-6 text-lg">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#" class="no-underline hover:underline text-white hover:text-gray-500"> 
                                    <i class="icon-social-facebook"> Facebook </i> 
                                </a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#" class="no-underline hover:underline text-white hover:text-gray-500">
                                    <i class="icon-social-linkedin"> Linkedin </i>
                                </a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#" class="no-underline hover:underline text-white hover:text-gray-500">
                                    <i class="icon-social-twitter"> Twitter </i>
                                </a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#" class="no-underline hover:underline text-white hover:text-gray-500">
                                    <i class="icon-social-instagram"> instagram </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                
                    <div class="flex-1 text-center">
                        <p class="uppercase text-white md:mb-6">Navigation</p>
                        <ul class="list-reset mb-6 text-lg">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="../#artikel" class="no-underline hover:underline text-white hover:text-gray-500">Artikel</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="../#about" class="no-underline hover:underline text-white hover:text-gray-500">Tentang Kami</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="../#service" class="no-underline hover:underline text-white hover:text-gray-500">Layanan Kami</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="../#portofolio" class="no-underline hover:underline text-white hover:text-gray-500">Portofolio</a>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 ">
                        <div class="mb-6 px-10 mx-auto text-center">
                            <h5 class="text-lg uppercase md:mb-6">Alamat Kami</h5>
                            <iframe class="" width="100%" height="100%"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9404.102928581575!2d110.41376237335024!3d-7.68977960945305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ea3d4edc82f%3A0x1bc7876343de2757!2zN8KwNDEnMzUuNiJTIDExMMKwMjUnMTIuMCJF!5e0!3m2!1sid!2sid!4v1585278507298!5m2!1sid!2sid"></iframe>
                            <p class="text-lg">Jl. Murai nomor 5 Perumahan Kavling UII, Ngaglik Sleman</p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{mix('js/andipputra.js')}}"></script>
</body>
</html>
