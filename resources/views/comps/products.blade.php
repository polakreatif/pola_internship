<div class="row justify-content-center">
  @foreach($products as $product)
    <a href="{{ url('/p/'.$product->slug) }}" class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="{{$loop->index*100 }}">
      <div class="card shadow" style="border-radius: 15px;">
        <div class="position-relative">
          @if($product->type == 1)
            <div class="ribbon-wrapper ribbon-lg">
              <div class="ribbon bg-success text-white text-md">
                Express
              </div>
            </div>
          @endif  
          <div 
            style="
              background-image: url('{{ asset('storage/'.$product->image) }}');
              background-color: #fff;
              background-repeat: no-repeat;
              background-position: center;
              background-size: contain;
              border-top-right-radius: 15px;
              border-top-left-radius: 15px;
              height: 150px;
              width: 100%;
            "
          ></div>
        </div>
        <div class="card-body">
          <div class="d-flex text-truncate text-capitalize">
            <h5>{{ $product->name }}</h5>
          </div>
          <p>Rp. {{ $product->price }}</p>
        </div>
      </div>
    </a>
  @endforeach
</div>