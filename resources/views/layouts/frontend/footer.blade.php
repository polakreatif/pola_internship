
   <!-- Footer Section Start-->
      <div class="footer-main-container">
         <div class="footer-inner">
            <div class="container">
               <div class="foot-top">
                  <div class="foot-top-right row">
                     <ul class="foot-top-left col-lg-3 col-md-3 col-sm-6 col-xs-6">
                           <a href="#" class="foot-logo" style="text-decoration:none">
                            <h2>{{ $companies->nama_company }}</h2>
                           </a></br>
                          {{ $companies->slogan }}
                     </ul>
                     <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <h5>Service</h5>
                           @foreach($products as $product)
                           <li><a href="#">{{$product->name_product}}</a></li>
                           @endforeach
                     </ul>
                     <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <h5>Explore</h5>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/careers">Careers</a></li>
                        <li><a href="/blogs">Blog</a></li>
                        <li><a href="/#product">Services</a></li>
                     </ul>
                     <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <h5>Social Media</h5>
                        <div class="social-media">
                           <a href="https://instagram.com/{{ $companies->instagram }}"><i class="fab fa-instagram instagram"></i></a>
                           <a href="https://facebook.com/{{ $companies->facebook }}"><i class="fab fa-facebook-f facebook"></i></a>
                           <a href="https://twitter.com/{{ $companies->twitter }}"><i class="fab fa-twitter twitter"></i></a>
                           <a href="https://youtube.com/{{ $companies->youtube }}"><i class="fab fa-youtube youtube"></i></a>
                        </div>
                     </ul>
                  </div>
               </div>
               <div class="foot-info col-lg-12 text-center">
                  <p><a href="/" style="text-decoration: none;">&copy; 2020 Inspiring Media All Rights Reserved.</a></p>
               </div>
            </div>
         </div>
      </div>
      <!--Footer Section End-->
</body>
</html>
