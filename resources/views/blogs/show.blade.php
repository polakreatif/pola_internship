@extends('layouts.global')

@section('hero')
<div class="jumbotron" style="height: 360px; color: rgba(32, 33, 36, 1); background: #f2f5fa;">
  <div class="container">
    <div class="text-center" style="margin-top: 60px;" data-aos="zoom-in">
        <h1>Peluncuran Produk baru, Iphone dan Xiomi bersaing</h1>
        <p >#product #apa, 12:02:200 12:00:01</p>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
    <div style="margin-top: -120px;">
        <div class="row justify-content-center">
            <div class="col-6" data-aos="fade-up">
                <div
                    class="shadow"
                    style="
                        border-radius: 1rem; 
                        background-image: url('/media/02.jpg'); 
                        background-color: #fff; 
                        background-position: center; 
                        background-size: contain; 
                        background-repeat: no-repeat; 
                        width: 100%; height: 400px;
                    "
                ></div>
            </div>
        </div>
    </div>
    
    <div>
        <p class="text-justify" style="white-space: pre-wrap;" data-aos="fade-up">
            description
        </p>
    </div>
    <br/><br/>
</div>
@endsection