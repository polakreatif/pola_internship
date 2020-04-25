@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Lainnya</title>

  <style>
    .btn-theme {
      border-radius: 15px;
      background: #28a745;
      color: #fff;
    }

    .btn-theme:hover {
      color: rgba(0,0,0,1);
      border: 1px solid rgba(0,0,0,1);
      background: #fff;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      transition: background 0.2s ease-in-out;
    }
    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    #footer {
      background: #fff;
      padding: 0 0 30px 0;
      color: rgba(0,0,0,1);
      font-size: 14px;
    }

    #footer .footer-newsletter {
      padding: 50px 0;
      background: #fff;
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
      background: #28a745;
      color: #fff;
      transition: 0.3s;
      border-radius: 50px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    #footer .footer-newsletter form input[type="submit"]:hover {
      color: rgba(0,0,0,1);
      border: 1px solid rgba(0,0,0,1);
      background: #fff;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      transition: background 0.2s ease-in-out;
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
      color: rgba(0,0,0, 1);
    }

    #footer .footer-top .footer-contact p {
      font-size: 14px;
      line-height: 24px;
      margin-bottom: 0;
      font-family: "Raleway", sans-serif;
      color: rgba(0,0,0, 1);
    }

    #footer .footer-top h4 {
      font-size: 16px;
      font-weight: bold;
      color: rgba(0,0,0, 1);
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
      color: rgba(0,0,0, 0.8);
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
      padding:3px;
      color: rgba(0,0,0,0.8);
      transition: 0.3s;
      display: inline-block;
      line-height: 1;
    }

    #footer .footer-top .footer-links ul a:hover {
      text-decoration: none;
      color: #fff;
      background: #28a745;
    }

    #footer .footer-top .social-links a {
      font-size: 18px;
      display: inline-block;
      background: #28a745;
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
      color: rgba(0,0,0, 1);
      text-decoration: none;
      border: 1px solid rgba(0,0,0, 1);
      transition: background 0.2s ease-in-out;
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

@section('nav')
  @include('comps.admin.navbar')

  @includeIf('comps.admin.sidebar', [
    'setting' => $setting,
    'user_admin' => $user_admin
  ])
@endsection

@section('footer')
  @include('comps.admin.footer')
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
            @includeIf('comps.customer_service', ['other' => $other])
          </div>

          <div class="tab-pane fade" id="buletin" role="tabpanel" aria-labelledby="buletin-tab">
            <footer id="footer"> 
              @includeIf('comps.buletin', ['other' => $other])
            </footer>
          </div>

          <div class="tab-pane fade" id="section-footer" role="tabpanel" aria-labelledby="section-footer-tab">
            <footer id="footer">
              @includeIf('comps.footer', ['other' => $other])
            </footer>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection