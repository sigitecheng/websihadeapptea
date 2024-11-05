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
    <div style="margin-top:100px;" class="container-fluid">

    </div>
    <!-- End Header -->
    <!-- End Hero -->

    <main id="main">
        
      <!-- ======= partners Section ======= -->
       <section id="partners" class="partners section-bg">

        <div class="container">
        
          <div class="row justify-content-center" data-aos="zoom-in">
        @foreach ($data as $item )
          
        <div
        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
        >
        <img
        src="{{asset('storage/' . $item->gambarperusahaan)}}"
        class="img-fluid"
        alt="{{asset('storage/' . $item->gambarperusahaan)}}"
        />
      </div>
      @endforeach

          </div>
        </div>
      </section>
      <!-- End Cliens Section -->

      <!-- End About Us Section -->
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
                      data-purecounter-end="411"
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

      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')