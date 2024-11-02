
<footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <!-- <img src="assets/img/Comma.png" alt=""> -->
              <img
                class="ml-2 ps-4"
                src="/assets/icon/sihadeiconnew.png"
                alt=""
                style="transform: scale(2.5); margin-bottom:15px; text-align:left;"
              />
              <br>
            </a>
            <p><strong> PT. Haznia Bina Virofarm</strong></p>
            <div class="social-links mt-3">
              <a style="color: black" href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a style="color: black" href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a style="color: black" href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a style="color: black" href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a style="color: black" href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
              <a style="color: black" href="#" class="youtube"><i class="bi bi-youtube"></i></a>
              <a style="color: black" href="mailto:youremail@example.com" class="email"><i class="bi bi-envelope"></i></a>
            </div>
            
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 style="color: green" >Our Services</h4>
            <ul>
              
              <li>
                <i style="color: green;" class="bi bi-chevron-right"></i>
                <a style="color: black" href="/">Home</a>
              </li>
              <li>
                <i style="color: green;" class="bi bi-chevron-right"></i>
                <a style="color: black" href="/">Tentang Kami</a>
              </li>
              <li>
                <i style="color: green;" class="bi bi-chevron-right"></i>
                <a style="color: black" href="/perusahaan">Company</a>
              </li>
              <li>
                <i style="color: green;" class="bi bi-chevron-right"></i>
                <a style="color: black" href="/pertanian">Product</a>
              </li>
              <li>
                <i style="color: green;" class="bi bi-chevron-right"></i>
                <a style="color: black" href="/mitrakami">Our Partners</a>
              </li>
              
              <li>
                <i style="color: green;" class="bi bi-chevron-right"></i>
                <a style="color: black" href="/pertanyaan">F.A.Q</a>
              </li>
              
              
              <li>
                <i style="color: green;" class="bi bi-chevron-right"></i>
                <a style="color: black" href="/kontak">Contact Us</a>
              </li>
              
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4 style="color: green;">Contact Us</h4>
            <p>
              Jln. Pelesiran No. 20E Desa/Kelurahan lebak Siliwangi Kecamatan Coblong, Kota Bandung Jawa Barat 40132 Indonesia
              </p>
              <p>
                  <strong><i class="bi bi-telephone mr-2"></i> Phone:</strong> +628 8888 888<br />
                  <strong><i class="bi bi-envelope mr-2"></i> Email:</strong> email@email
                </p>
                              {{-- </p> --}}
          </div>
        </div>
      </div>
    </div>
    <div style="background-color: green; padding: 10px; text-align: center; color: white; width: 100%; margin: 0;">
      <p style="margin: 0;">
        Designed by <a href="https://wa.me/628132145585" style="color: white; text-decoration: underline;">sarigit.com</a> &copy; 2024 All Rights Reserved
      </p>
    </div>
    
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a style="background: green"
    href="#"
    class="back-to-top d-flex align-items-center justify-content-center"
    ><i class="bi bi-arrow-up-short"></i
  ></a>

  <!-- Vendor JS Files -->
  <script src="/assets/newfrontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/newfrontend/vendor/aos/aos.js"></script>
  <script src="/assets/newfrontend/vendor/php-email-form/validate.js"></script>
  <script src="/assets/newfrontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/newfrontend/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/newfrontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/newfrontend/vendor/glightbox/js/glightbox.min.js"></script>
  <!-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script> -->
  <script>
    $(function () {
      var tallest = 0;
      $(".samakanintern").each(function () {
        var currentHeight = $(this).height();
        //console.log(currentHeight);
        if (currentHeight > tallest) {
          tallest = $(this).height();
        }
      });
      $(".samakanintern").height(tallest);
    });
  </script>

  <!-- Template Main JS File -->
  <script src="/assets/newfrontend/js/main.js"></script>
</body>
</html>
