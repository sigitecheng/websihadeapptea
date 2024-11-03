@include('frontend.00_dashboardusers.style.header')
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto">
          <img src="assets/img/logo.png" alt="" width="150" class="img-fluid" />
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li>
              <a class="nav-link scrollto" href="index.html#hero"> Home </a>
            </li>
            <li>
              <a class="nav-link scrollto" href="index.html#about"> About </a>
            </li>
            <li>
              <a class="nav-link scrollto" href="company.html"> Company </a>
            </li>
            <li class="dropdown">
              <a href="#" class="active">
                <span>Talent</span> <i class="bi bi-chevron-down"></i>
              </a>
              <ul>
                <li><a href="student.html">Find Student</a></li>
                <li><a href="job.html">Find Job & Intern</a></li>
              </ul>
            </li>
            <li>
              <a class="nav-link scrollto" href="index.html#faq">F.A.Q</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="index.html#contact">
                Contact Us
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="getstarted scrollto"> Login </a>
              <ul>
                <li><a href="form-polibatam-login.html">Polibatam Login</a></li>
                <li><a href="form-industry-login.html">Industry Login</a></li>
              </ul>
            </li>
            <!-- <li>
              <a class="getstarted scrollto" href="#about">Get Started</a>
            </li> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="job" class="mt-5">
      <section class="container">
        <!-- tombol back -->

        <a href="job.html" class="mb-3">
          <i class="bi bi-arrow-left"></i> Back
        </a>

        <br />

        <div class="row justify-content-between">
          <div class="col-md-8">
            <div class="d-flex align-items-center">
              <img
                src="https://images.glints.com/unsafe/160x0/glints-dashboard.s3.amazonaws.com/company-logo/869a11f9c7f6c05bbb9554a29a0f4450.png"
                alt=""
                width="80"
              />
              <div class="ms-3">
                <p class="job-title mb-1 h5">Social Media Creative Marketing</p>
                <a href="company-detail.html" class="job-company">
                  Clarity Eyewear
                </a>

                <br />
              </div>
            </div>
            <div class="text-muted mt-3">
              <p class="job-location mb-2">
                <i class="bi bi-geo-alt-fill me-2"></i> Jakarta
              </p>
              <p class="job-email mb-2">
                <i class="bi bi-messenger me-2"></i>
                iriyanti.mendayun@citratubindo.com
              </p>
              <p class="job-web mb-2">
                <i class="bi bi-globe me-2"></i>
                <a href="#"> https://www.citratubindo.com/ </a>
              </p>
            </div>

            <div class="mt-5">
              <div class="job-desc">
                <h4 class="h6 mb-4">Job Description</h4>

                <p>
                  PT Citra Tubindo Tbk, a group of Vallourec, was established in
                  1983 to provide the end finishing of OCTG (oil country tubular
                  goods) for the oil industry in Indonesia.
                </p>
                <p>
                  The plant started production in June 1984 as a pioneering
                  enterprise on the island of Batam, situated just 20km south of
                  Singapore and has now become the logistics centre for the oil
                  service industry in all of Indonesia. Both Citra Tubindo's
                  strategic location, coupled with having a deep water port
                  located in the industrial estate, allows for the efficient
                  global export of its products.
                </p>
                <p>
                  Today, PT Citra Tubindo Tbk is a world class manufacturer and
                  service provider for oilfield tubular goods. Over 75% of its
                  products are shipped to major multinational oil companies as
                  well as state oil companies located around the world. It
                  specialises in high-performance proprietary pipe and premium
                  thread connections for use in ever-demanding well
                  environments.
                </p>
              </div>

              <br />

              <div class="job-skill">
                <h4 class="h6 mb-4">
                  Required Knowledge, Skills, and Abilities
                </h4>

                <ul>
                  <li>Commit to have minimum 6 months internship period</li>
                  <li>
                    College student or fresh graduate in Animation, Multimedia,
                    or Visual Communication Design (DKV)
                  </li>
                  <li>GPA >= 3.0</li>
                  <li>Good communication skills</li>
                  <li>Good verbal and written communication skill</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="max-width: 380px">
            <div class="card">
              <div class="card-body">
                <h4 class="h6 mb-4">Job Overview</h4>
                <table class="table table-borderless text-muted">
                  <tr>
                    <td>Posted date</td>
                    <td>:</td>
                    <td class="text-end">13-03-2023</td>
                  </tr>
                  <tr>
                    <td>Location</td>
                    <td>:</td>
                    <td class="text-end">KOTA BATAM</td>
                  </tr>
                  <tr>
                    <td>Job nature</td>
                    <td>:</td>
                    <td class="text-end">Internship</td>
                  </tr>
                  <tr>
                    <td>Job type</td>
                    <td>:</td>
                    <td class="text-end">Graphic Designer</td>
                  </tr>
                  <tr>
                    <td>Start Date</td>
                    <td>:</td>
                    <td class="text-end">01-04-2023</td>
                  </tr>
                  <tr>
                    <td>End Date</td>
                    <td>:</td>
                    <td class="text-end">30-09-2023</td>
                  </tr>
                </table>

                <button class="btn btn-primary w-100">Apply Now</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')