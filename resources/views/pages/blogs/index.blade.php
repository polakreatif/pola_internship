@extends('layouts.frontend.master')

@include('layouts.frontend.navbar')

@section('content')

	<section class="blog-us">
		<div class="container">
          	<h1>Our Blog</h1>
			<hr class="my-4" id="line-blog">
			<div class="row text-center">
		        <div class="row">
		        	@if(count($articles) > 1)
			        	@foreach($articles as $article)
				            <div class="col-sm-4 blog">
				              	<div class="box">
					                <div class="card-body">
					                  <a href="/blog/{{ $article->id_artikel }}" style="text-decoration:none">
					                    <img src="https://assets.zoom.us/images/en-us/desktop/generic/video-not-working.PNG" class="card-img-top" alt="Website Development">
					                    <h5 class="card-title">{{ $article->judul }}</h5>
					                    <p class="card-text">{{ \Illuminate\Support\Str::limit($article->isi, 150, $end='...') }}</p>
					                  </a>
					                </div>
				              	</div>
				              <h4 class="bg-default text-white" align="center">C</h4>
				            </div>
			            @endforeach
		            @else
		            	<p>No Blog Post (:</p>
		            @endif
		        </div>
		    </div>
		</div>
	</section>

@endsection