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
        <div class="section-title">
          <h2>Product Sihade Organic Biofertilizer</h2>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 d-none d-xl-flex">
              <div class="sidebar w-100">
                <!-- icon filter -->
                <h3 class="h6 mb-3 fw-semibold d-flex align-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="20px"
                    height="12px"
                  >
                    <path
                      fill-rule="evenodd"
                      fill=""
                      d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"
                    ></path>
                  </svg>
                  <span class="ms-2">Filter Talent</span>
                </h3>
                <form>
                  <div class="mb-3">
                    <label class="form-label">Search</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search..."
                    />
                  </div>
                  {{-- <div class="mb-3">
                    <label class="form-label mb-3">Offer Type : </label>
                    <!-- checkbutton -->
                    <div class="form-check mb-2">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkFullTime"
                      />
                      <label class="form-check-label" for="checkFullTime">
                        Full Time
                      </label>
                    </div>
                    <div class="form-check mb-2">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkPartTime"
                      />
                      <label class="form-check-label" for="checkPartTime">
                        Part Time
                      </label>
                    </div>
                    <div class="form-check mb-2">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkIntern"
                      />
                      <label class="form-check-label" for="checkIntern">
                        Internship
                      </label>
                    </div>
                  </div> --}}
                  <a href="#" class="btn btn-success w-100 rounded-pill">
                    Search
                  </a>
                </form>
              </div>
            </div>
            <div class="col-xl-9">
              <button
                class="btn btn-outline-secondary w-100 d-xl-none mb-3"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#sidebar"
              >
                Filter
              </button>

              <div class="row">
                
                @foreach ($data as $item )
                  
                <div class="col-md-6">
                  <a href="/peternakandetails/{{$item->namaproduk}}">
                    <div class="card job-item mb-3">
                      <div class="card-body">
                        <div class="d-flex align-items-start mb-2">
                          <img style="width: 50%;"
                            src="{{asset('storage/' . $item->gambarproduk)}}"
                            alt="{{asset('storage/' . $item->gambarproduk)}}"
                            width="50"
                          />
                          <div class="ms-3">
                            <p style="color:black;" class="job-title mb-0">
                              {{$item->namaproduk}}
                            </p>
                            {{-- <p href="company-detail.html" class="job-company">
                              Bayerische Motoren Werke
                            </p> --}}
                          </div>
                        </div>
                        <div class="job-desc text-muted">
                          <p class="job-type mb-0">
                            <i class="fas fa-leaf me-2 text-muted"></i>
                            ANIMAL FARMING
                        </p>
                        
                        </div>
                        <br />
                        <p class="job-date text-muted mb-0">
                          <i class="bi-clock me-2"></i>
                          {{ \Carbon\Carbon::parse($item->tanggalupload)->translatedFormat('d F Y') }}

                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                
                @endforeach

              </div>
            </div>
          </div>
        </div>

        <div
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="sidebar"
          aria-labelledby="sidebarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Filter</h5>
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <!-- icon filter -->
            <h3 class="h6 mb-3 fw-semibold d-flex align-items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px"
                height="12px"
              >
                <path
                  fill-rule="evenodd"
                  fill=""
                  d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"
                ></path>
              </svg>
              <span class="ms-2">Filter Product</span>
            </h3>
            <form>
              <div class="mb-3">
                <label class="form-label">Search</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
              </div>
              <div class="mb-3">
                <label class="form-label mb-3">Offer Type : </label>
                <!-- checkbutton -->
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="checkFullTime"
                  />
                  <label class="form-check-label" for="checkFullTime">
                    Full Time
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="checkPartTime"
                  />
                  <label class="form-check-label" for="checkPartTime">
                    Part Time
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="checkIntern"
                  />
                  <label class="form-check-label" for="checkIntern">
                    Internship
                  </label>
                </div>
              </div>
              <a href="#" class="btn btn-primary w-100 rounded-pill">
                Search
              </a>
            </form>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

      @include('frontend.00_dashboardusers.style.footer')