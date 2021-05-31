      <!-- footer-section start -->
      <footer class="footer-section footer-section-two ptb-120">
          <div class="container">
              <div class="row ml-b-45">
                  <div class="col-lg-3 col-sm-6 mrb-30">
                      <div class="footer-widget widget-menu">
                          <h3 class="widget-title">Popular Links</h3>
                          <ul>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Experts</a></li>
                              <li><a href="#">Contact</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mrb-30">
                      <div class="footer-widget widget-menu">
                          <h3 class="widget-title">Contact</h3>
                          <ul class="contact-info">
                              <li>
                                  <a href="#">
                                      <span class="sub-title">1111 2222 3333</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <span class="sub-title">demo@gmail.com</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <span class="sub-title">London City ,356 Est ,klas</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <span class="sub-title">London City ,356 Est ,klas</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mrb-30">
                      <div class="footer-widget widget-menu">
                          <h3 class="widget-title">Social Links</h3>
                          <ul>
                              <li><a href="#">Facebook</a></li>
                              <li><a href="#">Twitter</a></li>
                              <li><a href="#">Linked In</a></li>
                              <li><a href="#">You Tube</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mrb-30">
                      <div class="footer-widget widget-menu">
                          <h3 class="widget-title">Support Links</h3>
                          <ul>
                              <li><a href="#">Support Center</a></li>
                              <li><a href="#">Partners</a></li>
                              <li><a href="#">Faq</a></li>
                              <li><a href="#">Status</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <div class="privacy-area privacy-area-two">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <p>Copyright © 2020. All rights reserved</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- footer-section end -->

      <!-- jquery -->
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <!-- migarate-jquery -->
      <script src="assets/js/jquery-migrate-3.0.0.js"></script>
      <!-- bootstrap js -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- magnific-popup js -->
      <script src="assets/js/jquery.magnific-popup.js"></script>
      <!-- isotope -->
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <!-- nice-select js-->
      <script src="assets/js/jquery.nice-select.js"></script>
      <!-- swipper js -->
      <script src="assets/js/swiper.min.js"></script>
      <!-- waypoints js link -->
      <script src="assets/js/jquery.waypoints.min.js"></script>
      <!-- counterup js -->
      <script src="assets/js/jquery.counterup.min.js"></script>
      <!--typed js-->
      <script src="assets/js/typed.js"></script>
      <script src="assets/js/jquery.syotimer.js"></script>
      <script src="assets/js/syotimer.lang.js"></script>
      <script src="assets/js/plugin.js"></script>
      <script src="assets/js/jquery.nav.js"></script>
      <!--particle js-->
      <script src="assets/js/particles.min.js"></script>
      <script src="assets/js/particles-app.js"></script>
      <!-- viewport js -->
      <script src="assets/js/viewport.jquery.js"></script>
      <!-- odometer js -->
      <script src="assets/js/odometer.min.js"></script>
      <!-- wow js file -->
      <script src="assets/js/wow.min.js"></script>
      <!-- main -->
      <script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


      <script>
          $(document).ready(function() {
              if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(function(position) {
                      var positionInfo = position.coords.latitude + "," + position.coords.longitude;
                      document.getElementById("location").value = positionInfo;
                  });
              } else {
                  alert("Sorry, your browser does not support HTML5 geolocation.");
              }
          });
      </script>
      </body>

      </html>