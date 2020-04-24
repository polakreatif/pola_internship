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