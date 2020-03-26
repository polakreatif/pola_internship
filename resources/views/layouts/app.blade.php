<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>@yield("title")</title>
        <link rel="icon" href="/icon.png" />

        <!-- Meta description -->
        @yield('meta-desc')
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- bootstrap.com -->
        <link 
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous"
        >
        <!-- My Style -->
        <link 
            rel="stylesheet" 
            type="text/css" href={{ asset('style.css') }} 
        >
        <!-- Font Awesome -->
        <link 
            rel="stylesheet" 
            href={{ asset('fontawesome-free-5.12.1-web/css/all.min.css') }} 
            crossorigin="anonymous"
        >

    </head>
    <body>
        <!-- Navbar -->
        <nav class="bg-white sticky-top shadow-lg" >
            <div class="container-fluid">
                <!-- Navbar -> max Medium -->
                <div class="d-block d-md-none">
                    <div class="d-flex justify-content-between py-3">
                        <a style="text-decoration: none; color: black; cursor: pointer; font-size: 23px;" href="#">Laundry Jone</a>
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                    
                </div>

                <!-- Navbar -> min Medium -->
                <div class="d-none d-md-block">
                    <div class="row justify-content-between py-3 ">
                        <div class="col-md-3">
                            <div class="d-flex">
                                <a style="text-decoration: none; color: black; cursor: pointer; font-size: 23px;" href="#">Laundry Jone</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex justify-content-end">
                                <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                                    Tentang Kami
                                </a>
                                <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                                    Blog
                                </a>
                                <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                                    Franchise
                                </a>
                                <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                                    Karir
                                </a>
                                <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                                    Kontak
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </nav>
        
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-2" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <ul class="list-group text-center">
                        <a href="#" class="list-group-item list-group-item-action">
                            Tentang Kami
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Blog
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Franchise
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Karir
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Kontak Kami
                        </a>
                        <li class="list-group-item">
                            <button 
                                type="button" 
                                class="btn w-100 text-danger" 
                                data-dismiss="modal" 
                                aria-label="Close"
                            >
                                <span aria-hidden="true">tutup</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('jumbotron')

        <!-- Space between content -->
        <br/><br/><br/>

        <!-- Container -->
        <div class="container">
            <!-- About Us -->
            @yield('about')

            <!-- Space between content -->
            <br/><br/><br/><br/>

            <!-- Carousel -->
            @yield('carousel')
            
            <!-- Space between content -->
            <br/><br/><br/><br/>

            <!-- Product -->
            @yield('product')

        </div><!-- Close Container -->

        <!-- Space between content -->
        <br/><br/><br/>

        <!-- Footer -->
        <footer class="bg-white border-top py-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 text-center">
                        <img 
                            src={{ asset('logo.png') }} 
                            class="w-50"
                            style="border-radius: 15px;"
                        >
                        <hr class="d-block d-md-none" />
                    </div>
                    <div class="col-sm-4">

                        <div class="row justify-content-between">
                            <div class="pl-3" style="width: 50%;">
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Tentang Kami
                                </a>
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Blog
                                </a>
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Layanan
                                </a>
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Karir
                                </a>
                            </div>
                            <div class="pr-2" style="width: 50%;">
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Pusan Bantuan
                                </a>
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Kontak Kami
                                </a>
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Syarat & Ketentuan
                                </a>
                                <a class="d-block my-3" href="#" style="color: black;">
                                    Kebijakan Privasi
                                </a>
                            </div>
                        </div>
                        <hr class="d-block d-md-none"/>
                    </div>
                    <div class="col-sm-4">
                        <h5>Unduh</h5>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-xl-6 my-2 text-center">
                                <img
                                    style="height: 50px"
                                    src={{ asset('download-google-play.webp')  }} 
                                >
                            </div>
                            <div class="col-lg-12 col-xl-6 my-2 text-center">
                                <img
                                    style="height: 50px"
                                    src={{ asset('download-app-store.webp')  }} 
                                >
                            </div>
                        </div>
                        <hr class="d-block d-md-none"/>
                        <br/>
                        <h5>Ikuti Kami</h5>
                        <div class="d-flex justify-content-around mt-3">
                            <a 
                                href="#"
                                style="text-decoration: none; color: black;"
                            >
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a 
                                href="#"
                                style="text-decoration: none; color: black;"
                            >
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a 
                                href="#"
                                style="text-decoration: none; color: black;"
                            >
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                            <a 
                                href="#"
                                style="text-decoration: none; color: black;"
                            >
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <hr/>
                <div class="text-center">
                    <p>&copy; <?php echo date("Y"); ?> Loundry Jone</p>
                    <small>Loundry Jone adalah merek milik PT Loundry Jone Group. Terdaftar pada Fiksi Direktorat Jenderal Kekayaan Intelektual Indonesia.</small>
                </div>

            </div>
        </footer>
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
