<div id="customer-service" class="p-3">
  <div class="text-center my-5" data-aos="fade-up">
    <h2>{{ $other->cs_title }}</h2>
    <p>{{ $other->cs_caption }}</p>
  </div>

  <div class="row justify-content-center">

    <div class="col-lg-6" >
      <div class="row justify-content-center">
        <div class="col-sm-6 text-center" data-aos="fade-up" data-aos-delay="0">
          <div class="my-3"> 
            <i class="fas fa-map fa-3x"></i>
          </div>
          <h4>{{ $other->cs_address_title }}</h4>
          <p>{{ $other->cs_address }}</p>
        </div>
        <div class="col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="my-3"> 
            <i class="fas fa-phone fa-3x"></i>
          </div>
          <h4>{{ $other->cs_phone_title }}</h4>
          <p>{{ $other->cs_phone }}</p>
        </div>
        <div class="col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="my-3"> 
            <i class="fas fa-envelope fa-3x"></i>
          </div>
          <h4>{{ $other->cs_email_title }}</h4>
          <p>{{ $other->cs_email }}</p>
        </div>
        <div class="col-sm-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="my-3"> 
            <i class="fas fa-clock fa-3x"></i>
          </div>
          <h4>{{ $other->cs_work_hours_title }}</h4>
          <p>{{ $other->cs_work_hours }}</p>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <form action="{{ url('/customer-service-message') }}" method="POST" role="form">
				@csrf

        <div class="form-group" data-aos="fade-up" data-aos-delay="0">
          <input placeholder="Nama" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Mohon isikan setidaknya 4 karakter !" />
				  <small id="nameHelp" class="form-text text-muted">Nama, dibutuhkan max 199 karakter.</small>
        </div>
        <div class="form-group" data-aos="fade-up" data-aos-delay="100">
          <input placeholder="Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Mohon isikan email dengan benar !" />
				  <small id="emailHelp" class="form-text text-muted">Email, dibutuhkan max 199 karakter.</small>
        </div>
        <div class="form-group" data-aos="fade-up" data-aos-delay="200">
          <input placeholder="Subjek" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Mohon isikan setidaknya 8 karakter !" />
				  <small id="subjectHelp" class="form-text text-muted">Subjek max 199 karakter.</small>
        </div>
        <div class="form-group" data-aos="fade-up" data-aos-delay="300">
          <textarea placeholder="Pesan...." class="form-control" name="message" rows="5" data-rule="required" data-msg="Mohon isikan pesan pesan untuk kami..."></textarea>
				  <small id="messageHelp" class="form-text text-muted">Pesan, dibutuhkan max 245 karakter.</small>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
          <button class="btn  btn-theme w-100" type="submit">Kirim Pesan WA</button>
        </div>
      </form>
    </div>

  </div>
</div>