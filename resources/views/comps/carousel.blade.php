<div id="carousel-promotion" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($all_carousel as $carousel)
      @if($loop->first)
        <li data-target="#carousel-promotion" data-slide-to="{{$loop->index}}" class="active"></li>
      @else
        <li data-target="#carousel-promotion" data-slide-to="{{$loop->index}}"></li>
      @endif
    @endforeach
  </ol>
  <div class="carousel-inner" style="border-radius: 15px;">
    @foreach($all_carousel as $carousel)
      @if($loop->first)
        <div class="carousel-item active">
          <div
            class="d-block carousel-img"
            style="
              background-image: url('{{ asset('storage/'. $carousel->image) }}');
            "
          ></div>
          <div class="carousel-caption d-none d-md-block" >
            <h5 >{{ $carousel->title }}</h5>
            <p >{{ $carousel->caption }}</p>
          </div>
          <a href="https:\\{{$carousel->sumber_link}}" target="_blank">{{ $carousel->sumber_label }}</a>
        </div>
      @else             
        <div class="carousel-item">
         <div
            class="d-block carousel-img"
            style="
              background-image: url('{{ asset('storage/'. $carousel->image) }}');
            "
          ></div>
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