<div id="customer-service" class="p-3">
  <div class="text-center my-5">
    <h2>{{ $other->cs_title }}</h2>
    <p>{{ $other->cs_caption }}</p>
  </div>

  <div class="row justify-content-center">

    <div class="col-lg-6">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="my-3"> 
            <i class="fas fa-map fa-3x"></i>
          </div>
          <h4>{{ $other->cs_address_title }}</h4>
          <p>{{ $other->cs_address }}</p>
        </div>
        <div class="col-lg-6 text-center">
          <div class="my-3"> 
            <i class="fas fa-phone fa-3x"></i>
          </div>
          <h4>{{ $other->cs_phone_title }}</h4>
          <p>{{ $other->cs_phone }}</p>
        </div>
        <div class="col-lg-6 text-center">
          <div class="my-3"> 
            <i class="fas fa-envelope fa-3x"></i>
          </div>
          <h4>{{ $other->cs_email_title }}</h4>
          <p>{{ $other->cs_email }}</p>
        </div>
        <div class="col-lg-6 text-center">
          <div class="my-3"> 
            <i class="fas fa-clock fa-3x"></i>
          </div>
          <h4>{{ $other->cs_work_hours_title }}</h4>
          <p>{{ $other->cs_work_hours }}</p>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <form action="{{ url('/customer-service/store') }}" method="POST" role="form">
        <div class="form-group">
          <input placeholder="Nama Anda" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Mohon isikan setidaknya 4 karakter !" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <input placeholder="Email Anda" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Mohon isikan email dengan benar !" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <input placeholder="Subjek" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Mohon isikan setidaknya 8 karakter !" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea placeholder="Pesan...." class="form-control" name="message" rows="5" data-rule="required" data-msg="Mohon isikan pesan pesan untuk kami..."></textarea>
          <div class="validate"></div>
        </div>
        <div class="text-center">
          <button class="btn btn-outline-primary w-100" style="border-radius: 15px;" type="submit">Kirim Pesan</button>
        </div>
      </form>
    </div>

  </div>
</div>