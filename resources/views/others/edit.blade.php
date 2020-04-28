@extends('layouts.dashboard')

@section('head')
  <title>{{ $setting->app_name }} | Edit Lainnya </title>
@endsection

@section('nav')
  @include('comps.admin.navbar')

  @includeIf('comps.admin.sidebar', ['setting' => $setting])
@endsection

@section('footer')
  @include('comps.admin.footer')
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Lainnya</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dasboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ url('/others') }}">Lainnya</a></li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          Terjadi kesalahan ! atau data yang dimasukan tidak sesuai. Coba periksa kembali dan masukan data dengan benar.
        </div>
      @endif
      @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      @endif 
        
      <div class="card-body">

        <form enctype="multipart/form-data" action="{{ url('/others/update') }}" method="POST">
          @csrf

          <input
          type="hidden"
          value="PUT"
          name="_method" />

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
            <li class="nav-item ml-auto">
              <button type="submit" class="btn btn-primary mx-3">Simpan Perubahan</button>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="cs" role="tabpanel" aria-labelledby="cs-tab">
              
              <div class="p-3">
                <div class="form-group">
                  <label for="cs_title">Judul</label>
                  <input type="text" class="form-control" name="cs_title" id="cs_title" aria-describedby="cs_titleHelp" value="{{ $other->cs_title }}" placeholder="Layanan Kami...">
                  <small id="cs_titleHelp" class="form-text text-muted">Judul max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_caption">Caption</label>
                  <textarea type="text" rows="4" class="form-control" name="cs_caption" id="cs_caption" aria-describedby="cs_captionHelp" placeholder="Hubungi kami....">{{ $other->cs_caption }}</textarea>
                  <small id="cs_captionHelp" class="form-text text-muted">Caption max 245 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_address_title">Judul Alamat</label>
                  <input type="text" class="form-control" name="cs_address_title" id="cs_address_title" aria-describedby="cs_address_titleHelp" value="{{ $other->cs_address_title }}" placeholder="Alamat Kami :">
                  <small id="cs_address_titleHelp" class="form-text text-muted">Judul Alamat max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_address">Alamat</label>
                  <textarea type="text" rows="4" class="form-control" name="cs_address" id="cs_address" aria-describedby="cs_addressHelp" placeholder="jalan Mandurorejo...">{{ $other->cs_address }}</textarea>
                  <small id="cs_addressHelp" class="form-text text-muted">Alamat max 245 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_phone_title">Judul Telepon</label>
                  <input type="text" class="form-control" name="cs_phone_title" id="cs_phone_title" aria-describedby="cs_phone_titleHelp" value="{{ $other->cs_phone_title }}" placeholder="Telepon Kami :">
                  <small id="cs_phone_titleHelp" class="form-text text-muted">Judul Telepon max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_phone">Telepon</label>
                  <input type="text" class="form-control" name="cs_phone" id="cs_phone" aria-describedby="cs_phoneHelp" value="{{ $other->cs_phone }}" placeholder="08213317xxxx">
                  <small id="cs_phoneHelp" class="form-text text-muted">Telepon max 15 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_email_title">Judul Email</label>
                  <input type="text" class="form-control" name="cs_email_title" id="cs_email_title" aria-describedby="cs_email_titleHelp" value="{{ $other->cs_email_title }}" placeholder="Email Kami :">
                  <small id="cs_email_titleHelp" class="form-text text-muted">Judul Email max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_email">Email</label>
                  <input type="email" class="form-control" name="cs_email" id="cs_email" aria-describedby="cs_emailHelp" value="{{ $other->cs_email }}" placeholder="cs@domain.com">
                  <small id="cs_emailHelp" class="form-text text-muted">Email max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_work_hours_title">Judul Jam Kerja</label>
                  <input type="text" class="form-control" name="cs_work_hours_title" id="cs_work_hours_title" aria-describedby="cs_work_hours_titleHelp" value="{{ $other->cs_work_hours_title }}" placeholder="Jam Kerja :">
                  <small id="cs_work_hours_titleHelp" class="form-text text-muted">Judul Jam Kerja max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="cs_work_hours">Jam Kerja</label>
                  <input type="text" class="form-control" name="cs_work_hours" id="cs_work_hours" aria-describedby="cs_work_hoursHelp" value="{{ $other->cs_work_hours }}" placeholder="Senin-Jumat, 08.00-14.30">
                  <small id="cs_work_hoursHelp" class="form-text text-muted">Jam Kerja max 245 karakter.</small>
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="buletin" role="tabpanel" aria-labelledby="buletin-tab">
              
              <div class="p-3">
                <div class="form-group">
                  <label for="buletin_title">Judul Buletin</label>
                  <input type="text" class="form-control" name="buletin_title" id="buletin_title" aria-describedby="buletin_titleHelp" value="{{ $other->buletin_title }}" placeholder="Ikuti Buletin Kami...">
                  <small id="buletin_titleHelp" class="form-text text-muted">Judul Buletin max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="buletin_caption">Caption Buletin</label>
                  <textarea type="text" rows="4" class="form-control" name="buletin_caption" id="buletin_caption" aria-describedby="buletin_captionHelp" placeholder="Dapatkan informasi seputar...">{{ $other->buletin_caption }}</textarea>
                  <small id="buletin_captionHelp" class="form-text text-muted">Caption Buletin max 245 karakter.</small>
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="section-footer" role="tabpanel" aria-labelledby="section-footer-tab">
              
              <div class="p-3">
                <div class="form-group">
                  <label for="main_address_title">Judul Bagian Pertama (Kantor Pusat)</label>
                  <input type="text" class="form-control" name="main_address_title" id="main_address_title" aria-describedby="main_address_titleHelp" value="{{ $other->main_address_title }}" placeholder="Kantor Pusat...">
                  <small id="main_address_titleHelp" class="form-text text-muted">Judul Bagian Pertama max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="main_address">Alamat Utama</label>
                  <textarea type="text" rows="4" class="form-control" name="main_address" id="main_address" aria-describedby="main_addressHelp" placeholder="Jalan Mandurorejo...">{{ $other->main_address }}</textarea>
                  <small id="main_addressHelp" class="form-text text-muted">Alamat Utama max 245 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="main_phone">Telepon Utama</label>
                  <input type="text" class="form-control" name="main_phone" id="main_phone" aria-describedby="main_phoneHelp" value="{{ $other->main_phone }}" placeholder="08213317xxxx">
                  <small id="main_phoneHelp" class="form-text text-muted">Telepon Utama max 15 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="main_email">Email Utama</label>
                  <input type="email" class="form-control" name="main_email" id="main_email" aria-describedby="main_emailHelp" value="{{ $other->main_email }}" placeholder="Ikuti Buletin Kami...">
                  <small id="main_emailHelp" class="form-text text-muted">Email Utama max 199 karakter.</small>
                </div>

                <hr/>
                <div class="form-group">
                  <label for="cs_footer_title">Judul Bagian Kedua (Layanan Konsumen)</label>
                  <input type="text" class="form-control" name="cs_footer_title" id="cs_footer_title" aria-describedby="cs_footer_titleHelp" value="{{ $other->cs_footer_title }}" placeholder="Layanan Konsumen...">
                  <small id="cs_footer_titleHelp" class="form-text text-muted">Judul Bagian Kedua max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="warranty_label">Label Garansi</label>
                  <input type="text" class="form-control" name="warranty_label" id="warranty_label" aria-describedby="warranty_labelHelp" value="{{ $other->warranty_label }}" placeholder="Garansi...">
                  <small id="warranty_labelHelp" class="form-text text-muted">Label Garansi max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="warranty_link">Link Garansi</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="warranty_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->warranty_link }}" aria-label="warranty_link" aria-describedby="warranty_link" name="warranty_link" placeholder="domain.com/blog/garansi">
                    
                  </div>
                  <small id="warranty_linkHelp" class="form-text text-muted">Link garansi max 199 karakter.</small>
                </div>

                <div class="form-group">
                  <label for="safety_guide_label">Label Panduan Keamanan</label>
                  <input type="text" class="form-control" name="safety_guide_label" id="safety_guide_label" aria-describedby="safety_guide_labelHelp" value="{{ $other->safety_guide_label }}" placeholder="Panduan Keamanan...">
                  <small id="safety_guide_labelHelp" class="form-text text-muted">Label Panduan Keamanan max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="safety_guide_link">Link Panduan Keamanan</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="safety_guide_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->safety_guide_link }}" aria-label="safety_guide_link" aria-describedby="safety_guide_link" name="safety_guide_link" placeholder="domain.com/blog/panduan-keamanan">
                    
                  </div>
                  <small id="safety_guide_linkHelp" class="form-text text-muted">Link Panduan Keamanan max 199 karakter.</small>
                </div>

                <div class="form-group">
                  <label for="help_page_label">Label Halaman Bantuan</label>
                  <input type="text" class="form-control" name="help_page_label" id="help_page_label" aria-describedby="help_page_labelHelp" value="{{ $other->help_page_label }}" placeholder="Halaman Bantuan...">
                  <small id="help_page_labelHelp" class="form-text text-muted">Label Halaman Bantuan max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="help_page_link">Link Halaman Bantuan</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="help_page_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->help_page_link }}" aria-label="help_page_link" aria-describedby="help_page_link" name="help_page_link" placeholder="domain.com/blog/panduan-keamanan">
                    
                  </div>
                  <small id="help_page_linkHelp" class="form-text text-muted">Link Halaman Bantuan max 199 karakter.</small>
                </div>
                <hr/>
                
                <div class="form-group">
                  <label for="about_us_title">Judul Bagian Ketiga (Tentang Kami)</label>
                  <input type="text" class="form-control" name="about_us_title" id="about_us_title" aria-describedby="about_us_titleHelp" value="{{ $other->about_us_title }}" placeholder="Tentang Kami...">
                  <small id="about_us_titleHelp" class="form-text text-muted">Judul Bagian Ketiga max 199 karakter.</small>
                </div>

                <div class="form-group">
                  <label for="profil_label">Label Profil</label>
                  <input type="text" class="form-control" name="profil_label" id="profil_label" aria-describedby="profil_labelHelp" value="{{ $other->profil_label }}" placeholder="Profil...">
                  <small id="profil_labelHelp" class="form-text text-muted">Label Profil max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="profil_link">Link Profil</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="profil_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->profil_link }}" aria-label="profil_link" aria-describedby="profil_link" name="profil_link" placeholder="domain.com/blog/profil-kami">
                    
                  </div>
                  <small id="profil_linkHelp" class="form-text text-muted">Link Profil max 199 karakter.</small>
                </div>

                <div class="form-group">
                  <label for="vision_and_mision_label">Label Visi dan Misi</label>
                  <input type="text" class="form-control" name="vision_and_mision_label" id="vision_and_mision_label" aria-describedby="vision_and_mision_labelHelp" value="{{ $other->vision_and_mision_label }}" placeholder="Visi dan Misi...">
                  <small id="vision_and_mision_labelHelp" class="form-text text-muted">Label Visi dan Misi max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="vision_and_mision_link">Link Visi dan Misi</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="vision_and_mision_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->vision_and_mision_link }}" aria-label="vision_and_mision_link" aria-describedby="vision_and_mision_link" name="vision_and_mision_link" placeholder="domain.com/blog/panduan-keamanan">
                    
                  </div>
                  <small id="vision_and_mision_linkHelp" class="form-text text-muted">Link Visi dan Misi max 199 karakter.</small>
                </div>

                <div class="form-group">
                  <label for="career_label">Label Karir</label>
                  <input type="text" class="form-control" name="career_label" id="career_label" aria-describedby="career_labelHelp" value="{{ $other->career_label }}" placeholder="Karir...">
                  <small id="career_labelHelp" class="form-text text-muted">Label Karir max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="career_link">Link Karir</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="career_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->career_link }}" aria-label="career_link" aria-describedby="career_link" name="career_link" placeholder="domain.com/blog/panduan-keamanan">
                    
                  </div>
                  <small id="career_linkHelp" class="form-text text-muted">Link Karir max 199 karakter.</small>
                </div>
                <hr/>

                <div class="form-group">
                  <label for="sosial_media_title">Judul Bagian Keempat (Sosial Media)</label>
                  <input type="text" class="form-control" name="sosial_media_title" id="sosial_media_title" aria-describedby="sosial_media_titleHelp" value="{{ $other->sosial_media_title }}" placeholder="Ikuti Sosial Media Kami...">
                  <small id="sosial_media_titleHelp" class="form-text text-muted">Judul Bagian Keempat max 199 karakter.</small>
                </div>
                 <div class="form-group">
                  <label for="sosial_media_caption">Caption</label>
                  <textarea type="text" rows="4" class="form-control" name="sosial_media_caption" id="sosial_media_caption" aria-describedby="sosial_media_captionHelp" placeholder="Dapatkan informasi...">{{ $other->sosial_media_caption }}</textarea>
                  <small id="sosial_media_captionHelp" class="form-text text-muted">Caption max 245 karakter.</small>
                </div>

                <div class="form-group">
                  <label for="instagram_link">Instagram</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="instagram_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->instagram_link }}" aria-label="instagram_link" aria-describedby="instagram_link" name="instagram_link" placeholder="instagram.com/ali.fata">
                    
                  </div>
                  <small id="instagram_linkHelp" class="form-text text-muted">Max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="twitter_link">Twitter</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="twitter_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->twitter_link }}" aria-label="twitter_link" aria-describedby="twitter_link" name="twitter_link" placeholder="twitter.com/alifata_">
                    
                  </div>
                  <small id="twitter_linkHelp" class="form-text text-muted">Max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="facebook_link">Facebook</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="facebook_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->facebook_link }}" aria-label="facebook_link" aria-describedby="facebook_link" name="facebook_link" placeholder="facebook.com/alifata_">
                    
                  </div>
                  <small id="facebook_linkHelp" class="form-text text-muted">Max 199 karakter.</small>
                </div>
                <div class="form-group">
                  <label for="youtube_link">Youtube</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="youtube_link">https://</span>
                    </div>
                    <input type="text" class="form-control"value="{{ $other->youtube_link }}" aria-label="youtube_link" aria-describedby="youtube_link" name="youtube_link" placeholder="youtube.com/alifata_">
                    
                  </div>
                  <small id="youtube_linkHelp" class="form-text text-muted">Max 199 karakter.</small>
                </div>
              </div>

            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
@endsection