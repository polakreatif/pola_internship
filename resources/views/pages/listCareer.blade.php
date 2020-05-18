@extends('layouts.lp')

@section('career')
    <div class="bg-white">
        <div class="container">
            <img src="svg/header.svg" alt="">
            <div class="row pt-5">
                @foreach ($careers as $career)
                    <div class="col">
                        <div class="card shadow p-3 mb-4 bg-white rounded">
                            <img class="card-img-top img-fluid" src="{{url('storage/img/careers/'.$career->gambar)}}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{$career->judul}}</h5>
                                <p class="card-text text-justify">{{$career->teks}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row text-center py-5">
                <div class="col">
                    <a href="/careers/create" class="btn btn-gradient text-center">Bergabung Bersama Kami</a>
                </div>
            </div>
        </div>
    </div>
@endsection