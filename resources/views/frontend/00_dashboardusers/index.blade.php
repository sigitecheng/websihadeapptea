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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 d-flex flex-column justify-content-center mt-5 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <h1 style="color: white">Welcome to Sihade Organic Farm</h1>
            <h2 style="color: white">Connecting to Farm Industry</h2>
            <a href="https://wa.me/62811237916" target="_blank" style="text-decoration: none;">
                <button class="btn" type="button" style="background-color: green; color: white; border: none; padding: 10px 10px; transition: background-color 0.3s, color 0.3s;" 
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';" 
                    onmouseout="this.style.backgroundColor='green'; this.style.color='white';">
                    <i class="fab fa-whatsapp" style="margin-right: 5px;"></i> Contact Us
                </button>
            </a>
            
          </div>
          <div
            class="col-lg-6 order-1 order-lg-2 hero-img"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            {{-- <img
              src="/assets/newfrontend/img/hero-img.png"
              class="img-fluid animated"
              alt=""
            /> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        
      <!-- ======= partners Section ======= -->
      {{-- <section id="partners" class="partners section-bg">
        <div class="container">
          <div class="row justify-content-center" data-aos="zoom-in">
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-ilo.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-polibatam.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-sp.png"
                class="img-fluid"
                alt=""
              />
            </div>
          
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>

          </div>
        </div>
      </section> --}}
      <!-- End Cliens Section -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green">About Sihade</h2>
          </div>

          @foreach ($dataaboutsihade as $data)
              
          <div class="row content">
            <div class="col-lg-6">
              <p>
                  {{$data->judul}}
                
                  <ul>
                  <li><i style="color: green" class="ri-check-double-line"></i> {{ $data->point1}}</li>
                  <li><i style="color: green" class="ri-check-double-line"></i> {{ $data->point2}}</li>
                  <li><i style="color: green" class="ri-check-double-line"></i> {{ $data->point3}}</li>
                  <li><i style="color: green" class="ri-check-double-line"></i> {{ $data->point4}}</li>
                  <li><i style="color: green" class="ri-check-double-line"></i> {{ $data->point5}}</li>
                  <li><i style="color: green" class="ri-check-double-line"></i> {{ $data->point6}}</li>
                  <li><i style="color: green" class="ri-check-double-line"></i> {{ $data->point7}}</li>
          </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p style="text-align: justify">
                {{$data->keterangan}}
            </div>
          </div>
          </div>
      @endforeach
</section>
<!-- End About Us Section -->

<!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row">
            <div
              class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
            >
              <div class="content">
                <h3 style="color: green">
                  <strong>Why</strong>
                  Sihade ?
                </h3>
                <p>
                    Sihade Organic Farm is dedicated to cultivating high-quality organic produce <br class="d-none d-md-block" />
                    while promoting sustainable farming practices and supporting local communities.
                  </p>                  
              </div>

              <div class="accordion-list">
                <ul>

                  @foreach ($datawhysihade as $data )
                    
                    <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-1"
                          
                        >
                          <span style="color: green">01. {{ $data->pertanyaan1}}</span>
                         
                          <i style="color: green;" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green;" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-1"
                          class="collapse show"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                          {{$data->jawaban1}}
                          </p>
                        </div>
                      </li>
                      
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-2"
                        >
                          <span style="color: green">02. {{ $data->pertanyaan2}}</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-2"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                            {{$data->jawaban2}}
                          </p>
                        </div>
                      </li>
                      
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-3"
                        >
                          <span style="color:green ">03. {{$data->pertanyaan3}}</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-3"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                              {{$data->jawaban3}}
                          </p>
                        </div>
                      </li>
                      
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-4"
                        >
                          <span style="color: green;">04. {{$data->pertanyaan4}}</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-4"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>

                              {{$data->jawaban4}}
                          </p>
                        </div>
                      </li>
{{--                       
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-5"
                        >
                          <span style="color: green">05. Eco-Friendly Initiatives</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-5"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                            Collaborating with organizations to promote sustainability and environmental conservation efforts.
                          </p>
                        </div>
                      </li> --}}
                      

                </ul>
                
                @endforeach
              </div>
            </div>

            <div
              class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
              style="background-image: url('/assets/icon/produksihade.jpeg')"
              data-aos="zoom-in"
              data-aos-delay="150"
            >
              &nbsp;
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_company">
                <div class="count-box">
                  <i style="color: green;" class="bi bi-building"></i>
                  <div>
                    <span style="color: orange"
                      data-purecounter-start="0"
                      data-purecounter-end="12"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green">Company</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_student">
                <div class="count-box">
                    <i class="fas fa-seedling" style="color: green"></i>

                  <div>
                    <span style="color: orange;"
                      data-purecounter-start="0"
                      data-purecounter-end="6424"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green;">Agriculture</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_job">
                <div class="count-box">

                  <i class="fas fa-tractor" style="color: green"></i>
                  
                  <div>
                    <span style="color: orange"
                      data-purecounter-start="0"
                      data-purecounter-end="1"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green">Farm</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_job">
                <div class="count-box">
                    
                    <i class="fas fa-box" style="color: green"></i>

                  <div>
                    <span style="color: orange;"
                      data-purecounter-start="0"
                      data-purecounter-end="24576"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green;">Product</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green">testimonials</h2>
            <p>What they are saying about us</p>
          </div>

          <div
            class="testimonials-slider swiper-container"
            data-aos="fade-up"
            data-aos-delay="200"
          >

          
          <div class="swiper-wrapper">
              @foreach ($datatestimoni as $data)
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    {{$data->komentar}}
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{asset('storage/' . $data->foto)}}" class="testimonial-img" alt="" />
                    <h3>{{$data->namalengkap}}</h3>
                    <h4>{{$data->jabatan}}</h4>
                    <h4>{{$data->perusahaan}}</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green;">Frequently Asked Questions</h2>
          </div>

          <div class="faq-list">
            <ul>

              @foreach ($datafaq as $data)
                
                <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-1"
                    >
                      <span style="color: green">{{ $data->pertanyaan1}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-1"
                      class="collapse show"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$data->jawaban1}}
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-2"
                    >
                      <span style="color: green">{{$data->pertanyaan2}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-2"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$data->jawaban2}}
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-3"
                    >
                      <span style="color: green">{{$data->pertanyaan3}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-3"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$data->jawaban3}}
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-4"
                    >
                      <span style="color: green">{{$data->pertanyaan4}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-4"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$data->jawaban4}}
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-5"
                    >
                      <span style="color: green">{{$data->pertanyaan5}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-5"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$data->jawaban5}}
                      </p>
                    </div>
                  </li>

                  
              @endforeach
              </ul>
              
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green;">Contact Us</h2>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">

                  
          @foreach ($datainformasiperusahaan as $data )
            
                  <div class="info-box">
                    <i style="color: green;" class="bi bi-geo-alt"></i>
                    <h3 style="color: green;">Address</h3>
                    <p>
                        {{$data->alamat}}
                    </p>
                  
                </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green" class="bi bi-telephone"></i>
                    <h3 style="color: green;">Call Us</h3>
                    <p>
                        <a href="https://wa.me/62811237916" target="_blank" style="text-decoration: none; color: green;">
                          <i class="fab fa-whatsapp" style="font-size: 14px; color:green"></i> {{$data->telepon1}}                        </a>
                        <br />
                        <a href="https://wa.me/6288888888" target="_blank" style="text-decoration: none; color: green;">
                          <i class="fab fa-whatsapp" style="font-size: 14px; color:green"></i> {{$data->telepon2}}
                        </a>
                      </p>
                       
                </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green" class="bi bi-envelope"></i>
                    <h3 style="color: green">Email Us</h3>
                    <p>{{$data->email1}}<br />{{$data->email2}}</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green;" class="bi bi-clock"></i>
                    <h3 style="color: green">Open Hours</h3>
                    <p>Monday - Friday<br />{{$data->jamkerjamulai}}:00AM - {{$data->jamkerjaselesai}}:00PM</p>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
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