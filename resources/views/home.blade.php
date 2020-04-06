@extends('layout')

@section('title')
    Andipputra Photography
@endsection

@section('jumbotron')
<div class="container">
    <h1 class="display-2">Selamat Datang</h1>
    <p class="lead">Ini merupakan website dari Andipputra Photography</p>
    <hr class="my-4">
</div>
@endsection

@section('about-text')
    <h2 class="text-center">About Us</h2>
    <br>
    <p>
    Kami merupakan photographer yang berbasis di Jogjakarta, berdiri dari tahun 2018 kami telah banyak membantu mengabadikan momen-momen dihidup orang.
    Kami dapat melakukan photoshoot untuk graduation, wedding, prewedding, dan acara berharga kalian lainnya.
    </p>
@endsection

@section('about-logo')
    <img src="img/logo.png" alt="" height="150">
@endsection

@section('service')
    <h2 class="content-section heding">Our Service</h2>
    <div class="card-deck" >
        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <img class="card-img-top" src="img/group.jpg" alt="Card image cap" >
            <div class="card-body">
            <h5 class="card-title">Group Photoshoot </h5>
            </div>
        </div>
        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <img class="card-img-top" src="img/graduation.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Graduation Photoshoot</h5>
            </div>
        </div>
        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <img class="card-img-top" src="img/photoshoot.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Produk Photoshoot</h5>
            </div>
        </div>
    </div>
@endsection

@section('portfolio')
    <div class="container text-center">
        <div class="content-section-heading">
        <h2 class="text-dark">Portfolio Photo </h2>
        <br>
        </div>
    </div>
    <div class="container" >
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/photoshoot.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/group.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/graduation.jpg" alt="Third slide">
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
@endsection

@section('maps')
    <div class="container" style="height:100%; width:120%">
        <iframe width="100%" height="100%"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9404.102928581575!2d110.41376237335024!3d-7.68977960945305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ea3d4edc82f%3A0x1bc7876343de2757!2zN8KwNDEnMzUuNiJTIDExMMKwMjUnMTIuMCJF!5e0!3m2!1sid!2sid!4v1585278507298!5m2!1sid!2sid"></iframe>
    </div>
@endsection

@section('copyright')
    <p class="text-muted small mb-0">Copyright &copy; andipputraphoto.com 2020</p>
@endsection