@include('frontend.00_dashboardusers.style.header')

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->

{{-- ------------------------------------------------------------- --}}
{{-- MENU NAVBAR  --}}
@include('frontend.00_dashboardusers.style.navbar')

{{-- ------------------------------------------------------------- --}}
        
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
        
      <!-- ======= Contact Section ======= -->
      <section style="margin-top:75px;" id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green;">Contact Us</h2>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green;" class="bi bi-geo-alt"></i>
                    <h3 style="color: green;">Address</h3>
                    <p>
                        Jln. Pelesiran No. 20E Desa/Kelurahan lebak Siliwangi Kecamatan Coblong, Kota Bandung Jawa Barat 40132 Indonesia
                    
                    </p>
                  
                </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green" class="bi bi-telephone"></i>
                    <h3 style="color: green;">Call Us</h3>
                    <p>
                        <a href="https://wa.me/628888888" target="_blank" style="text-decoration: none; color: green;">
                          <i class="fab fa-whatsapp" style="font-size: 14px; color:green"></i> +628 888888
                        </a>
                        <br />
                        <a href="https://wa.me/6288888888" target="_blank" style="text-decoration: none; color: green;">
                          <i class="fab fa-whatsapp" style="font-size: 14px; color:green"></i> +628 8888888
                        </a>
                      </p>
                       
                </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green" class="bi bi-envelope"></i>
                    <h3 style="color: green">Email Us</h3>
                    <p>sihade@gmail.com<br />sihadenew@gmail.com</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green;" class="bi bi-clock"></i>
                    <h3 style="color: green">Open Hours</h3>
                    <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Your Question ?"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="number"
                      class="form-control"
                      name="subject"
                      placeholder="Your Number Whatsapp ?"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Message"
                      required
                    ></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>
                    <button class="btn" type="submit" style="background-color: green; color: white; border: none; transition: background-color 0.3s, color 0.3s;" 
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';" 
                    onmouseout="this.style.backgroundColor='green'; this.style.color='white';">
                    <i class="fab fa-telegram" style="margin-right: 5px;"></i> Send Message
                </button>
                
                
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')