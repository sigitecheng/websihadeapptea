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

    <main id="student" class="mt-5">
      <section class="container">
        <div class="section-title">
          <h2 style="color: green">Agricultural Products</h2>
        </div>
/assets/newfrontend/
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
                    <label class="form-label">Name Product </label>
                    <select class="form-select">
                      <option value="">Select a category</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                  </div>
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

              {{-- <a href=""> --}}
                <div class="student-items d-md-flex px-3 py-4">
                  <div class="me-4">
                    <img
                      class="company-img border rounded-circle mb-3 mb-md-0"
                      width="100"
                      height="100"
                      src="/assets/newfrontend//img/img-student/dicky-profile.jpg"
                      alt="#"
                    />
                  </div>
                  <div class="">
                    <h4 style="color: green" class="student-title mb-1"><i class="fas fa-leaf mr-2"></i>. Sihade Organic Farm</h4>
                    <p style="color: black" class="mb-0">Organic Farming & Sustainable Agriculture</p>
                    <br />
                    <p style="color: black" class="">
                      Kami berkomitmen untuk menyediakan produk organik berkualitas tinggi dengan metode pertanian berkelanjutan. Fokus kami pada kesehatan tanah dan keberlanjutan lingkungan.
                    </p>
                </div>
                
                </div>
              {{-- </a> --}}


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
            <h3 class="h6 mb-3 fw-semibold">Filter Talent</h3>
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
                <label class="form-label">Study Program </label>
                <select class="form-select">
                  <option value="">Select a category</option>
                  <option value="1">Category 1</option>
                  <option value="2">Category 2</option>
                  <option value="3">Category 3</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')