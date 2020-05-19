@extends('layouts.frontend.master')

@section('content')

    <section class="blog-us">
        <div class="container">
            <h1>Job List</h1>
            <hr class="my-4" id="line-blog">
            <ul class="list-group">
              @if($career->isNotEmpty())
                @foreach($career as $career)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/careers/{{ $career->id_career }}" style="text-decoration: none;"><span class="badge badge-primary badge-pill">{{ $career->id_career }}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $career->nama_career }}</a>
                    <span class="badge badge-primary badge-pill">{{ $career->lokasi_career }}</span>
                  </li> <br>
                @endforeach
              @else
                  <p>No Jobs Available</p>
              @endif
            </ul>
        </div>
    </section>

@endsection