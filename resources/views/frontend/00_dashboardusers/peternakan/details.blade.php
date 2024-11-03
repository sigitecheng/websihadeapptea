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

    <main id="job" class="mt-5">
      <section class="container">
        <!-- tombol back -->

        <a href="/peternakan" class="mb-3">
          <i style="color:green;" class="bi bi-arrow-left"></i><span style="color: green">Back</span>
        </a>

        <br />

        <div class="row justify-content-between">
          <div class="col-md-12">
            <div class="d-flex align-items-center">
              <img
                src="{{asset('storage/' . $data->gambarproduk)}}"
                alt="{{asset('storage/' . $data->gambarproduk)}}"
                width="40%"
              />
              <div class="ms-3">
                <p class="job-title mb-1 h5">{{$data->namaproduk}}</p>
                <a style="color: green;" href="company-detail.html" class="job-company">
                  Animal Farming
                </a>

                <br />
              </div>
            </div>
            {{-- <div class="text-muted mt-3">
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
            </div> --}}

            <div class="mt-5">
              <div class="job-desc">
                <h4 class="h6 mb-4">Description</h4>

                <p style="text-align: justify">
                  {{$data->keterangan}}
                </p>
              </div>

              <br />
{{-- 
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
              </div> --}}
            </div>
          </div>

          {{--  --}}
          {{-- <div class="col-md-4" style="max-width: 380px">
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
           --}}
        </div>
      </section>
    </main>
    <!-- End #main -->


    @include('frontend.00_dashboardusers.style.footer')