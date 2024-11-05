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
        

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section style="margin-top:100px;" id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green;">Frequently Asked Questions</h2>
          </div>

          <div class="faq-list">
            <ul>

              @foreach ($data as $item)
                
                <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-1"
                    >
                      <span style="color: green">{{$item->pertanyaan1}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-1"
                      class="collapse show"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$item->jawaban1}}
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
                      <span style="color: green">{{$item->pertanyaan2}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-2"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$item->jawaban2}}
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
                      <span style="color: green">{{$item->pertanyaan3}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-3"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$item->jawaban3}}
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
                      <span style="color: green">{{$item->pertanyaan4}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-4"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$item->jawaban4}}
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
                      <span style="color: green">{{$item->pertanyaan5}}</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-5"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{$item->jawaban5}}
                      </p>
                    </div>
                  </li>

                  
              @endforeach
              </ul>
              
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')