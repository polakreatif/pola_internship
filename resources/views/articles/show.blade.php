@extends('layouts.app')

@section('artikel')
    <div class="container">
        <h2 class="display-3 text-center">{{$articles->judul}}</h2>
    </div>
    <div class="container d-flex">
        <div class="container">
            <img src="/img/{{$articles->gambar}}" alt="{{$articles->gambar}}" style="width:100%;">
        </div>
        <div class="container">
            <p>{{$articles->isi}}</p>
            <br>
            <small>{{$articles->tanggal_dibuat}}</small>
        </div>
    </div>
@endsection
