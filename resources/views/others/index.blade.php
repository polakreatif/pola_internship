@extends('layouts.admin.dashboard')

@section('head')
  <title>Laundry Jone | Lainnya</title>

  <style>
    /*--------------------------------------------------------------
      # Footer
      --------------------------------------------------------------*/
      #footer {
        background: #fff;
        padding: 0 0 30px 0;
        color: rgba(32, 33, 36, 0.8);
        font-size: 14px;
        background: #eff2f8;
      }

      #footer .footer-newsletter {
        padding: 50px 0;
        background: #f2f5fa;
        text-align: center;
        font-size: 15px;
      }

      #footer .footer-newsletter h4 {
        font-size: 24px;
        margin: 0 0 20px 0;
        padding: 0;
        line-height: 1;
        font-weight: 600;
        color: rgba(32, 33, 36, 1);
      }

      #footer .footer-newsletter form {
        margin-top: 30px;
        background: #fff;
        padding: 6px 10px;
        position: relative;
        border-radius: 50px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        text-align: left;
      }

      #footer .footer-newsletter form input[type="email"] {
        border: 0;
        padding: 4px 8px;
        width: calc(100% - 100px);
      }

      #footer .footer-newsletter form input[type="submit"] {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 0 20px;
        background: rgba(32, 33, 36, 1);
        color: #fff;
        transition: 0.3s;
        border-radius: 50px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      }

      #footer .footer-newsletter form input[type="submit"]:hover {
        background: #fff;
        color: rgba(32, 33, 36, 1);
        border: 1px solid rgba(32, 33, 36, 1);
      }

      #footer .footer-top {
        padding: 60px 0 30px 0;
        background: #fff;
      }

      #footer .footer-top .footer-contact {
        margin-bottom: 30px;
      }

      #footer .footer-top .footer-contact h4 {
        font-size: 22px;
        margin: 0 0 30px 0;
        padding: 2px 0 2px 0;
        line-height: 1;
        font-weight: 700;
        color: rgba(32, 33, 36, 1);
      }

      #footer .footer-top .footer-contact p {
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 0;
        font-family: "Raleway", sans-serif;
        color: rgba(32, 33, 36, 1);
      }

      #footer .footer-top h4 {
        font-size: 16px;
        font-weight: bold;
        color: rgba(32, 33, 36, 1);
        position: relative;
        padding-bottom: 12px;
      }

      #footer .footer-top .footer-links {
        margin-bottom: 30px;
      }

      #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      #footer .footer-top .footer-links ul i {
        padding-right: 2px;
        color: rgba(32, 33, 36, 0.8);
        font-size: 18px;
        line-height: 1;
      }

      #footer .footer-top .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
      }

      #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
      }

      #footer .footer-top .footer-links ul a {
        color: #8a8c95;
        transition: 0.3s;
        display: inline-block;
        line-height: 1;
      }

      #footer .footer-top .footer-links ul a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(32, 33, 36, 1);
      }

      #footer .footer-top .social-links a {
        font-size: 18px;
        display: inline-block;
        background: rgba(32, 33, 36, 1);
        color: #fff;
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 50%;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
      }

      #footer .footer-top .social-links a:hover {
        background: #fff;
        color: rgba(32, 33, 36, 1);
        text-decoration: none;
        border: 1px solid rgba(32, 33, 36, 1);
      }

      #footer .copyright {
        text-align: center;
        float: left;
        color: rgba(32, 33, 36, 1);
      }

      #footer .credits {
        float: right;
        text-align: center;
        font-size: 13px;
        color: rgba(32, 33, 36, 1);
      }

      @media (max-width: 768px) {
        #footer .copyright, #footer .credits {
          float: none;
          text-align: center;
          padding: 5px 0;
        }
    }
  </style>
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="d-flex">
          <h1 class="m-0 text-dark">Lainnya</h1>
          <a class="btn btn-primary ml-3" href="{{ url('/others/edit') }}">Edit</a>
        </div>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active">Lainnya</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="cs-tab" data-toggle="tab" href="#cs" role="tab" aria-controls="cs" aria-selected="true">Customer Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="buletin-tab" data-toggle="tab" href="#buletin" role="tab" aria-controls="buletin" aria-selected="false">Buletin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="section-footer-tab" data-toggle="tab" href="#section-footer" role="tab" aria-controls="section-footer" aria-selected="false">Footer</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="cs" role="tabpanel" aria-labelledby="cs-tab">
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
                        <i class="fas fa-envelope fa-3x"></i>
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
          </div>

          <div class="tab-pane fade" id="buletin" role="tabpanel" aria-labelledby="buletin-tab">
            <footer id="footer"> 
              <!-- Newsletter -->
              <div class="footer-newsletter" data-aos="fade-up">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <h4>{{ $other->buletin_title }}</h4>
                      <p>{{ $other->buletin_caption }}</p>
                      <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>

          <div class="tab-pane fade" id="section-footer" role="tabpanel" aria-labelledby="section-footer-tab">
            <footer id="footer">
              <div class="footer-top">
                <div class="container">
                  <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                      <h3>{{ $other->main_address_title }}</h3>
                      <p>
                        {{ $other->main_address }}<br/><br/>
                        <strong>Phone:</strong> {{ $other->main_phone }}<br>
                        <strong>Email:</strong> {{ $other->main_email }}<br>
                      </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                      <h4>{{ $other->cs_footer_title }}</h4>
                      <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="https://{{ $other->warranty_link }}" target="_blank">{{ $other->warranty_label }}</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="https://{{ $other->safety_guide_link }}" target="_blank">{{ $other->safety_guide_label }}</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="https://{{ $other->help_page_link }}" target="_blank">{{ $other->help_page_label }}</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                      <h4>{{ $other->about_us_title }}</h4>
                      <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="https://{{ $other->profile_link }}" target="_blank">{{ $other->profil_label }}</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="https://{{ $other->vision_and_mision_link }}" target="_blank">{{ $other->vision_and_mision_label }}</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="https://{{ $other->career_link }}" target="_blank">{{ $other->career_label }}</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                      <h4>{{ $other->sosial_media_title }}</h4>
                      <p>{{ $other->sosial_media_caption }}</p>
                      <div class="social-links mt-3">
                        @if(strlen($other->instagram_link) > 0)
                          <a href="https://{{ $other->instagram_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if(strlen($other->instagram_link) > 0)
                          <a href="https://{{ $other->twitter_link }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if(strlen($other->instagram_link) > 0)
                          <a href="https://{{ $other->facebook_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        @endif
                        @if(strlen($other->instagram_link) > 0)
                          <a href="https://{{ $other->youtube_link }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        @endif
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </footer>
          </div>
        </div>


      </div>
    </div>
  </div>
@endsection