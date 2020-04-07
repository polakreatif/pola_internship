@extends('layouts.home')

@section('custom-head')
    <title> {{ $title }} </title>
    <meta 
        name="description" 
        content="{{ $title }}. {{ $description }}"
    >
@endsection

@section('jumbotron')
    <div 
        class="jumbotron jumbotron-fluid"
        style="background-image: url({{ $mediaJumbotron }}); background-color: #fff; background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; height: 550px;"
    >
        <div class="container text-white">
            <br/><br/><br/>
            <h1 class="bg-text-jumbotron d-inline-flex">{{ $titleJumbotron }}</h1>
            <br/>
            <p class="bg-text-jumbotron d-inline-flex font-italic">" {{ $text01Jumbotron }} "</p>
            <br/><br/><br/>
            <p class="bg-text-jumbotron d-inline-flex">{{ $text02Jumbotron }}</p>
            <br/>
            <a class="btn btn-success btn-lg" href="#" role="button">{{ $textDownload }}</a>
        </div>
    </div>
@endsection

@section('about')
    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-6 text-center">
            <img 
                src="{{ $mediaAboutUs }}" 
                alt="logo"
                class="w-100 shadow"
                style="border-radius: 1rem;"
            />
        </div>
        <div class="col-sm-8 col-lg-6 text-center">
            <br/><br/><br/>
            <h2>{{ $titleAboutUs }}</h2>
            <p>{{ $description }}</p>
        </div>
    </div>
@endsection


@section('carousel')
     <div class="row justify-content-center">
        <div class="col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($mediaCarousel as $media)
                        @if($loop->first)
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        @else
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        @endif
                    @endforeach
                </ol>
                <div class="carousel-inner">
                     @foreach ($mediaCarousel as $media)
                        @if($loop->first)
                            <div class="carousel-item active" >
                                <img 
                                    src="{{ $media }}" 
                                    class="d-block w-100" 
                                    alt="..."
                                    style="border-radius: 1rem;"
                                >
                            </div>
                        @else
                            <div class="carousel-item">
                                <img 
                                    src="{{ $media }}" 
                                    class="d-block w-100" 
                                    alt="..."
                                    style="border-radius: 1rem;"
                                >
                            </div>
                        @endif
                    @endforeach
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
@endsection

@section('products')
    <h2>Layanan Kami</h2>
    
    @foreach($products as $product)
        <br/>
        <h3>{{ $product['title'] }}</h3>
        <br/>
        <div class="row justify-content-center">
            @foreach($product['data'] as $data)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3" >
                    <div class="card shadow" style="border-radius: 15px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data['title'] }}</h5>
                                <p>
                                    {{ $data['desc'] }}
                                Cuma <del>Rp. {{ $data['normalPrice'] }}</del> <mark>Rp. {{ $data['discountPrice'] }}</mark>
                                </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection

@section('blogs')
    <h2>Blog Terbaru</h2>

    <!-- Space -->
    <br/>
    
    <div class="row justify-content-center">
        @foreach($blogs as $blog)
            <div class="col-md-3">
                <div class="card shadow mb-4" style="cursor: default; border-radius: 25px">
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
@endsection