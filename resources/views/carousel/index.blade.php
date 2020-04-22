@extends('layouts.admin.dashboard')

@section('head')
	<title>Laundry Jone | Carousel Promotion
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="d-flex">
          <h1 class="m-0 text-dark">Carousel Promotion</h1>
          <a class="btn btn-primary ml-3" href="{{ url('/carousel/create') }}">Tambah</a>
        </div>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Carousel Promosi</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
          <br/>
        @endif 
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6">
            <div id="carousel-promotion" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                @foreach($all_carousel as $carousel)
                  @if($loop->first)
                    <li data-target="#carousel-promotion" data-slide-to="{{$loop->index}}" class="active"></li>
                  @else
                    <li data-target="#carousel-promotion" data-slide-to="{{$loop->index}}"></li>
                  @endif
                @endforeach
              </ol>
              <div class="carousel-inner">
                @foreach($all_carousel as $carousel)
                  @if($loop->first)
                    <div class="carousel-item active" >
                      <img src="{{ asset('storage/'.$carousel->image) }}" class="d-block w-100" alt="Carousel Promotion">
                      <div class="carousel-caption d-none d-md-block" >
                        <h5 >{{ $carousel->title }}</h5>
                        <p >{{ $carousel->caption }}</p>
                      </div>
                      <a href="https:\\{{$carousel->sumber_link}}" target="_blank">{{ $carousel->sumber_label }}</a>
                    </div>
                  @else             
                    <div class="carousel-item">
                      <img src="{{ asset('storage/'.$carousel->image) }}" class="d-block w-100" alt="Carousel Promotion">
                      <div class="carousel-caption d-none d-md-block" >
                        <h5 >{{ $carousel->title }}</h5>
                        <p >{{ $carousel->caption }}</p>
                      </div>
                      <a href="https:\\{{$carousel->sumber_link}}" target="_blank">{{ $carousel->sumber_label }}</a>
                    </div>      
                  @endif             
                @endforeach
              
              </div>
              <a class="carousel-control-prev" href="#carousel-promotion" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-promotion" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <hr/>
        <br/>
        <br/>

        <div class="table-responsive">
          <table class="table table-hover table-sm">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Caption</th>
                <th scope="col">Gambar</th>
                <th scope="col">Link Sumber Gambar</th>
                <th scope="col">Label Sumber Gambar</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($all_carousel as $carousel)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $carousel->title }}</td>
                  <td>{{ $carousel->caption }}</td>
                  <td>
                    <div style="max-width: 75px;">
                      <img src="{{ asset('storage/'. $carousel->image ) }}" class="img-fluid" alt="Carousel Promotion"/>
                    </div>
                  </td>
                  <td>{{ $carousel->sumber_link }}</td>
                  <td>{{ $carousel->sumber_label }}</td>
                  <td>
                    <a href="{{ url('/carousel/'.$carousel->id.'/edit') }}" class="btn btn-sm btn-outline-primary mx-1">Edit</a>
                    
                    <form
                      onsubmit="return confirm('Hapus carousel secara permanen ?')"
                      class="d-inline mx-1"
                      action="{{url('/carousel/'. $carousel->id)}}"
                      method="POST">
                      @csrf
                      <input
                      type="hidden"
                      name="_method"
                      value="DELETE">
                      <button
                      type="submit"
                      value="Delete"
                      class="btn btn-outline-danger btn-sm">Hapus</button>
                    </form>
                    
                </tr>
              @endforeach
              
              
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
@endsection