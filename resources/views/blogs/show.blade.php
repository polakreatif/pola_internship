@extends('layouts.default')

@section('content')
    <div class="text-capitalize">
        <h1>{{ $blog->title }} safjkafjhafjah fsfk hafhauf af sauif afa uif auif aiufgaif aifgaifgaif aifa</h1>
    </div>
    <br/>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div
                class="shadow"
                style="border-radius: 1rem; background-image: url('https://picsum.photos/600/500'); background-color: #fff; background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; height: 500px;"
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
        <p>
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