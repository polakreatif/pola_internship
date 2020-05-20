@extends('layouts.frontend.master')

@section('content')

    <section class="blog-us">
        <div class="container">
            <h1>Job List</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <hr class="my-4" id="line-blog">
            <ul class="list-group">
              @if($careers->isNotEmpty())
                @foreach($careers as $careers)
                  @if(date('Y-m-d H:i:s') <= ($careers->apllication_deadline))
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/careers/{{ $careers->id_career }}" style="text-decoration: none;">{{ $careers->nama_career }}</a>
                    <span class="badge badge-primary badge-pill">{{ $careers->lokasi_career }}</span>
                  </li> <br>
                  @endif
                @endforeach
              @else
                  <p>No Jobs Available</p>
              @endif
            </ul>
        </div>
    </section>

@endsection