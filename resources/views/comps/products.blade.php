<div class="row justify-content-center">
  @foreach($products as $product)
    <a href="{{ url('/p/'.$product->slug) }}" class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="{{$loop->index*100 }}">
      <div class="card shadow" style="border-radius: 15px;">
        <div class="position-relative">
          @if($product->type == 1)
            <div class="ribbon-wrapper ribbon-lg">
              <div class="ribbon bg-success text-white text-md">
                Express
              </div>
            </div>
          @endif  
          <div class="product-card-img"
            style="
              background-image: url('{{ asset('storage/'.$product->image) }}');
            "
          ></div>
        </div>
        <div class="card-body">
          <div class="d-flex text-truncate text-capitalize">
            <h5 class="product-card-name"> {{ $product->name }}</h5>
          </div>
          <p class="product-card-price">Rp. {{ $product->price }}</p>
        </div>
      </div>
    </a>
  @endforeach
</div>