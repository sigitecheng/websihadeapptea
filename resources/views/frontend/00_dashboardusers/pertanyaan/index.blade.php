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
                <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-1"
                    >
                      <span style="color: green">What types of organic products do you offer?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-1"
                      class="collapse show"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        We offer a wide variety of organic products, including fresh fruits, vegetables, herbs, and organic fertilizers. Our produce is grown sustainably on our farm, ensuring that it is not only healthy for you but also beneficial for the environment. We pride ourselves on delivering high-quality, nutrient-rich products that support local agriculture and promote a healthier lifestyle.
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
                      <span style="color: green">How can I purchase products from Sihade Organic Farm?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-2"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        You can conveniently purchase our products through our website, where you can browse our full range of offerings. Additionally, you can visit our farm directly for a more personal experience. For our local customers, we also offer home delivery services to ensure you receive fresh organic produce right at your doorstep.
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
                      <span style="color: green">Are your products certified organic?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-3"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Yes, all our products are certified organic by recognized certification bodies. We adhere to strict guidelines and practices that prohibit the use of synthetic pesticides or fertilizers, ensuring that our produce is not only safe but also promotes sustainable farming practices that protect the environment.
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
                      <span style="color: green">How can I learn more about organic farming practices?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-4"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        We offer various workshops and educational resources on organic farming practices to help individuals understand the benefits and techniques of sustainable agriculture. Visit our website regularly for updates on upcoming events, workshops, and available materials to enhance your knowledge of organic farming.
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
                      <span style="color: green">Can I visit Sihade Organic Farm?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-5"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Yes, we warmly welcome visitors to Sihade Organic Farm! It’s a wonderful opportunity to see our farming practices in action and learn more about organic agriculture. Please check our website for visiting hours and any special events we may have, including guided tours and workshops that provide insight into our farming methods and products.
                      </p>
                    </div>
                  </li>
              </ul>
              
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')