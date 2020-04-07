@extends('layouts.default')

@section('custom-head')
    <title> Laundry Jone | Blog </title>
    <meta 
        name="description" 
        content="no desc"
    >
@endsection

@section('content')
<div class="row justify-content-center">
        @foreach($blogs as $blog)
            <div class="col-md-3">
                <div class="card shadow mb-5" style="cursor: default; border-radius: 25px">
                    <div
                        class="card-img-top"
                        style="background-image: url('media/{{ $blog->mediaUrl }}'); background-color: #fff; background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; height: 175px;"
                    ></div>
                    <div class="card-body">
                        <h5 class="card-title text-capitalize text-truncate">
                            {{ $blog->title }}
                        </h5>
                        <p class="card-text">
                            {{ substr($blog->description, 0, 85)}}...
                            <br/>
                            <i class="text-capitalize text-monospace font-italic" style="font-size: 12px"> 
                                <mark>{{ $blog->category->name }}</mark>
                            </i>
                            <br/>
                            <i class="text-monospace font-italic" style="font-size: 12px"> 
                                {{ $blog->created_at }}
                            </i>
                        </p>
                        <a href="/blog/{{ $blog->id }}" class="btn btn-sm btn-outline-primary font-italic">
                            selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @foreach($blogs as $blog)
        <!-- Id: {{ $blog->id }}
        title: {{ $blog->title }}
        description: {{ $blog->description }}
        mediaUrl: {{ $blog->mediaUrl }}
        created_at: {{ $blog->created_at }}
        kategori: {{ $blog->category->name }}
       <br/> -->

    @endforeach
@endsection
