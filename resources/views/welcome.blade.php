<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>yield("title")</title>
        <link rel="icon" href="/icon.png" />

        <meta 
            name="description" 
            content="Laundry Jone | Professional Laundry just for You. Loundry Jone adalah perusahaan jasa loundry sejak tahun 2003.
                    Hingga sekarang kami telah memiliki 983 cabang tersebar di seluruh Indonesia. 
                    Kami mengedepankan kualitas hasil dan pelayanan kepada pelangan,
                    dengan harga yang kompetitif.
                    Jutaan keluarga dan masyarakat telah mempercayakan loundry kepada kami.
                    Ingin loundry ? Loundry Jone aja tempatnya."
        >
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
        <!-- Font Awesome -->
        <link 
            rel="stylesheet" 
            href={{ asset('fontawesome-free-5.12.1-web/css/all.min.css') }} 
            crossorigin="anonymous"
        >


        <style>
            .bg-jumbotron {
                background-image: url(https://picsum.photos/1200/550); 
                background-color: #fff; 
                background-position: center; background-size: cover; 
                background-repeat: no-repeat; 
                width: 100%; 
                height: 550px;
            }
            .bg-text-jumbotron {
                background-color: rgba(0,0,0,0.3);
                padding-left: 5px;
                padding-right: 5px;
            }
        </style>
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

        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid bg-jumbotron">
            <div class="container text-white">
                <br/><br/><br/>
                <h1 class="bg-text-jumbotron d-inline-flex">Laundry Jone</h1>
                <br/>
                <p class="bg-text-jumbotron d-inline-flex font-italic">" Professional Laundry just for You "</p>
                <br/><br/><br/>
                <p class="bg-text-jumbotron d-inline-flex">SOLUSI kebutuhan LOUNDRY ANDA, sekarang hanya TINGGAL KLIK. Siap antar jemput seluruh Indonesia.</p>
                <br/>
                <a class="btn btn-success btn-lg" href="#" role="button">download now</a>
            </div>
        </div>

        <!-- Space between content -->
        <br/><br/><br/>

        <!-- Container -->
        <div class="container">
            <!-- About Us -->
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-6 text-center">
                    <img 
                        src="https://picsum.photos/500/350" 
                        alt="logo"
                        class="w-100 shadow"
                        style="border-radius: 1rem;"
                    />
                </div>
                <div class="col-sm-8 col-lg-6 text-center">
                    <br/><br/><br/>
                    <h2>Siapa Kami ?</h2>
                    <p>Loundry Jone adalah perusahaan jasa loundry sejak tahun 2003.
                    Hingga sekarang kami telah memiliki 983 cabang tersebar di seluruh Indonesia. 
                    Kami mengedepankan kualitas hasil dan pelayanan kepada pelangan,
                    dengan harga yang kompetitif.
                    Jutaan keluarga dan masyarakat telah mempercayakan loundry kepada kami.
                    Ingin loundry ? Loundry Jone aja tempatnya.
                    </p>
                </div>
            </div>

            <!-- Space between content -->
            <br/><br/><br/><br/>

            <!-- Carousel -->
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img 
                                    src="https://picsum.photos/1200/550" 
                                    class="d-block w-100" 
                                    alt="..."
                                    style="border-radius: 1rem;"
                                >
                            </div>
                            <div class="carousel-item">
                                <img 
                                    src="https://picsum.photos/1200/550" 
                                    class="d-block w-100" 
                                    alt="..."
                                    style="border-radius: 1rem;"
                                >
                            </div>
                            <div class="carousel-item">
                                <img 
                                    src="https://picsum.photos/1200/550" 
                                    class="d-block w-100" 
                                    alt="..."
                                    style="border-radius: 1rem;"
                                >
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Space between content -->
            <br/><br/><br/><br/>

            <!-- Product -->
            <h2>Layanan Kami</h2>
            <!-- Space between product -->
            <br/>
            <!-- Cuci pakaian -->
            <h3>Cuci Pakaian</h3>
            <br/>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Express Satuan</h5>
                            <p>Paket cuci pakaian (baju, celana, dalaman, dll) satuan. 
                            Dijamin jadi 1/2 hari (12 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Reguler Satuan</h5>
                            <p>Paket cuci pakaian (baju, celana, dalaman, dll) satuan. 
                            Dijamin jadi 3 hari (3 x 24 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Express Kiloan</h5>
                            <p>Paket cuci pakaian (baju, celana, dalaman, dll) kiloan. 
                            Dijamin jadi 1/2 hari (12 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Minimal 2 kilo.
                            Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Reguler Kiloan</h5>
                            <p>Paket cuci pakaian (baju, celana, dalaman, dll) kiloan. 
                            Dijamin jadi 3 hari (3 x 24 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Minimal 2 kilo.
                            Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Cuci Aja</h5>
                            <p>Suka nyetrika sendiri?
                            Ada paket Cuci Aja (baju, celana, dalaman, dll).
                            Bersih, wangi, higienis, seperti baru, sudah dilipat.
                            Waktu menyesuaikan paket satuan/kiloan.
                            Harga adalah harga paket pilihan satuan/kiloan di <mark>diskon 20%.</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Setrika Aja</h5>
                            <p>Pakaian udah dicuci ?
                            Tenang, ada paket Setrika Aja (baju, celana, dalaman, dll).
                            Harum, wangi, rapi, licin.
                            Waktu menyesuaikan paket satuan/kiloan.
                            Harga adalah harga paket pilihan satuan/kiloan di <mark>diskon 40%.</mark>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- space between product -->
            <br/>
            <!-- Cuci Karpet -->
            <h3>Cuci Karpet</h3>
            <br/>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Express Besar</h5>
                            <p>Paket cuci karpet ukuran besar. 
                            Dijamin jadi 3 hari (3 x 24 jam).
                            Bersih, wangi, higienis, gak bau apek, seperti baru.
                            Cuma <del>Rp. 95.000</del> <mark>Rp.89.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Reguler Besar</h5>
                            <p>Paket cuci karpet ukuran besar. 
                            Dijamin jadi 7 hari (7 x 24 jam).
                            Bersih, wangi, higienis, gak bau apek, seperti baru.
                            Cuma <del>Rp. 65.000</del> <mark>Rp.59.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Express Sedang</h5>
                            <p>Paket cuci karpet ukuran sedang. 
                            Dijamin jadi 3 hari (3 x 12 jam).
                            Bersih, wangi, higienis, gak bau apek, seperti baru.
                            Cuma <del>Rp. 55.000</del> <mark>Rp.49.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Reguler Sedang</h5>
                            <p>Paket cuci karpet ukuran sedang. 
                            Dijamin jadi 7 hari (7 x 12 jam).
                            Bersih, wangi, higienis, gak bau apek, seperti baru.
                            Cuma <del>Rp. 35.000</del> <mark>Rp.29.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- space between product -->
            <br/>
            <!-- Cuci Karpet -->
            <h3>Cuci Sepatu</h3>
            <br/>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Express Besar</h5>
                            <p>Paket cuci sepatu ukuran besar. 
                            Dijamin jadi 1/2 hari (12 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Cuma <del>Rp. 35.000</del> <mark>Rp.29.999</mark>
                            </p>     
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Reguler Besar</h5>
                            <p>Paket cuci sepatu ukuran besar. 
                            Dijamin jadi 3 hari (3 x 24 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Express Sedang</h5>
                            <p>Paket cuci sepatu ukuran sedang. 
                            Dijamin jadi 1/2 hari (12 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Cuma <del>Rp. 25.000</del> <mark>Rp.19.999</mark>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Reguler Sedang</h5>
                            <p>Paket cuci sepatu ukuran sedang. 
                            Dijamin jadi 3 hari (3 x 24 jam).
                            Bersih, wangi, higienis, seperti baru.
                            Cuma <del>Rp. 15.000</del> <mark>Rp. 9.999,-</mark>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

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
                    <p>&copy; 2020 Loundry Jone</p>
                    <small>Loundry Jone adalah merek milik PT Loundry Jone Group. Terdaftar pada Fiksi Direktorat Jenderal Kekayaan Intelektual Indonesia.</small>
                </div>

            </div>
        </footer>
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
