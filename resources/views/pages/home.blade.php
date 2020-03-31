@extends('layouts.app')

@section('title','The Fashion')

@section('content')
    
    <!-- Header -->
    <header class="container">
        <div class="row d-flex align-items-center">
            <div class="col-6">
                <h1 class="heading-primary">
                    Hemat <small class="h1 heading-secondary">Uang</small> Anda.
                    <br>
                    Belanja Murah Disini.
                </h1>
                <p class="mt-3">
                    Buat anda yang suka belanja sepatu tapi bingung mengatur keuangan
                    jangan bingung karena TheFashion adalah pusat belanja sepatu
                    yang <strong>Murah</strong> dan <strong>Berkualitas Bagus</strong>.
                </p>
                <a href="#" class="d-flex align-items-center color-secondary-paragraph">
                    <div>
                        Belanja Sekarang
                    </div>
                    <div>
                        <img class="ml-2" src="frontend/images/arrow-right@2x.png" alt="Arah Kanan">
                    </div>
                </a>
            </div>
            <div class="col-6">
                <div class="image-box">
                    <img class="d-flex mx-auto" src="frontend/images/header_photo@2x.jpg" alt="Shoes Header Photo">
                </div>
            </div>
        </div>
    </header>

    <!-- Main / Konten Utama -->
    <main class="mt-5">
        <div class="container">
            <div class="text-center">
                <h1 class="heading-main">Kelebihan Toko Kami</h1>
                <div class="mx-auto d-block design-header-aksesoris"></div>
            </div>
            <section class="section-stats row justify-content-center margin" id="kelebihan">
                <div class="col-4 col-md-3">
                    <img class="mx-auto d-block" src="frontend/images/moneyicon@2x.jpg" alt="Logo termurah">
                    <p class="mt-3 text-center">
                        Sepatu kualitas terbaik dengan harga <strong>Termurah</strong>
                    </p>
                </div>
                <div class="col-4 col-md-3">
                    <img class="mx-auto d-block" src="frontend/images/firsticon@2x.jpg" alt="Logo terbaik">
                    <p class="mt-3 text-center">
                        Sepatu <strong>Terbaik</strong> yang ada di Indonesia
                    </p>
                </div>
                <div class="col-4 col-md-3">
                    <img class="mx-auto d-block" src="frontend/images/packageicon@2x.jpg" alt="Logo pengiriman">
                    <p class="mt-3 text-center">
                        Pengiriman <strong>Cepat</strong> dan kualitas paket yang baik
                    </p>
                </div>
            </section>
        </div>

        <section class="section-partnerKami">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="heading-main">
                            <small class="heading-main-secondary">Partner</small> Kami
                        </h1>
                        <p>
                            Kami memiliki beberapa partner
                            <br>
                            yang bekerja sama menggunakan
                            <br>
                            brand kami
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/image_partner@2x.jpg" alt="Logo Partner Kami" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-produkKami" id="produkKami">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-produk-kami">
                        <h1 class="heading-main">Produk Kami</h1>
                        <div class="design-header-aksesoris mx-auto d-block"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-produk-kami-konten" id="produkKonten">
            <div class="container">
                <div class="section-produk-sepatu row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <div class="card-produk-sepatu" style="background-image: url('frontend/images/sepatu1.jpg');"></div>
                        </a>
                        <div class="text-sepatu">
                            <h5 class="teks-nama-sepatu">Nike React Infinity Run Flyknight</h5>
                            <p class="teks-kategori">Sepatu Lari Laki</p>
                            <span class="teks-harga-sepatu">Rp 2,356,000,00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <div class="card-produk-sepatu" style="background-image: url('frontend/images/sepatu2.jpg');">
                                <div class="kotak-discount text-center">
                                    <p class="potongan-discount">-20%</p>
                                </div>
                            </div>
                        </a>
                        <div class="text-sepatu">
                            <h5 class="teks-nama-sepatu">Nike Air VaporMax 360</h5>
                            <p class="teks-kategori">Sepatu Laki</p>
                            <span class="teks-harga-sepatu"><del>Rp 3,156,000,00</del></span>
                            <span class="teks-harga-sepatu">Rp 2,156,000,00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <div class="card-produk-sepatu" style="background-image: url('frontend/images/sepatu3.jpg');">
                                <div class="kotak-discount text-center">
                                    <p class="potongan-discount">-20%</p>
                                </div>
                            </div>
                        </a>
                        <div class="text-sepatu">
                            <h5 class="teks-nama-sepatu">Lebron 17</h5>
                            <p class="teks-kategori">Sepatu Basket</p>
                            <span class="teks-harga-sepatu"><del>Rp 2,909,000,00</del></span>
                            <span class="teks-harga-sepatu">Rp 2,156,000,00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <div class="card-produk-sepatu" style="background-image: url('frontend/images/sepatu4.jpg');"></div>
                        </a>
                        <div class="text-sepatu">
                            <h5 class="teks-nama-sepatu">Kyrie AS EP</h5>
                            <p class="teks-kategori">Sepatu Basket</p>
                            <span class="teks-harga-sepatu">Rp 1,797,000,00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <div class="card-produk-sepatu" style="background-image: url('frontend/images/sepatu5.jpg');">
                                <div class="kotak-discount text-center">
                                    <p class="potongan-discount">-40%</p>
                                </div>
                            </div>
                        </a>
                        <div class="text-sepatu">
                            <h5 class="teks-nama-sepatu">Nike SB Shane</h5>
                            <p class="teks-kategori">Sepatu Skate</p>
                            <span class="teks-harga-sepatu"><del>Rp 1,009,000,00</del></span>
                            <span class="teks-harga-sepatu">Rp 560,000,00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <div class="card-produk-sepatu" style="background-image: url('frontend/images/sepatu6.jpg');"></div>
                        </a>
                        <div class="text-sepatu">
                            <h5 class="teks-nama-sepatu">Nike Air Max 720 20</h5>
                            <p class="teks-kategori">Sepatu Basket</p>
                            <span class="teks-harga-sepatu">Rp 2,779,000,00</span>
                        </div>
                    </div>
                </div>
                <div class="produk-button-lihat-lebih text-center">
                    <a href="#" class="btn btn-produk-lihat-lebih">
                        Lihat Lebih
                    </a>
                </div>
            </div>
        </section>

        <section class="section-produk-terpopuler">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-5 col-md-6">
                                <h1 class="heading-main">
                                    <small class="heading-main-secondary">Produk</small> Terpopuler
                                </h1>
                                <p>
                                    Semua produk yang kami buat adalah produk yang
                                    <br>
                                    terbaik dan inilah produk yang terpopuler
                                    <br>
                                    dipasaran
                                </p>
                                <div class="produk-terpopuler">
                                    <a href="#" class="btn btn-produk-terpopuler">
                                        Lihat Produk
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 col-md-6">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="frontend/images/sepatu4.jpg" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Kyrie AS EP</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="frontend/images/sepatu6.jpg" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Nike Air Max 720 20</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="frontend/images/sepatu3.jpg" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lebron 17</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    
@endsection