@extends('layouts.default')

@section('custom-head')
    <title> Laundry Jone | {{ $blog->title }} </title>
    <meta 
        name="description" 
        content="Laundry Jone. {{ $blog->description }}"
    >
@endsection

@section('content')
    <div class="text-capitalize text-center">
        <h1>{{ $blog->title }}</h1>
    </div>
    <br/>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div
                class="shadow"
                style="border-radius: 1rem; background-image: url('/media/{{ $blog->mediaUrl }}'); background-color: #fff; background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; height: 500px;"
            ></div>
        </div>
    </div>
    <br/><br/>

    <div>
        <p class="text-monospace font-italic" style="font-size: 15px">
            <mark>
                Kategori : <i class="text-capitalize">{{ $blog->category->name }}</i>, dibuat tanggal : {{ $blog->created_at }}
            </mark>
        </p>
        <p class="text-justify" style="white-space: pre-wrap;">
            {{ $blog->description }}
        </p>
    </div>
    <br/><br/>
    <!-- Show blog {{ $id }}, 
    id: {{ $blog->id }}
    Title: {{ $blog->title }}
    Desc: {{ $blog->description }}
    Url: {{ $blog->mediaUrl }}
    Category: {{ $blog->category->name }} -->
@endsection