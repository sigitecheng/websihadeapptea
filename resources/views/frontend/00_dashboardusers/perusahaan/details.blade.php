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

    <main id="company-detail" class="mt-5 container">
      <section>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="color: green" href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a style="color: green" href="company.html">Company</a></li>
            <li style="color: black" class="breadcrumb-item active" aria-current="page">
              <strong> PT. Haznia Bina Virofarm</strong>
            </li>
          </ol>
        </nav>

        <div class="row mt-5">
          <div class="col-md-2 col-xl-1">
            <img
              src="https://images.glints.com/unsafe/60x0/glints-dashboard.s3.amazonaws.com/company-logo/fcb7bcd1efd0b9eb8fa2e836bafc17a0.jpg"
              alt=""
              class="w-100"
            />
          </div>
          <div class="col-md-10">
            <h3 class="h5 mb-3 fw-semibold">PT. Haznia Bina Virofarm</h3>
            <p style="text-align: justify">
                PT. Haznia Bina Virom Farm is a dynamic company operating in the agricultural sector, proudly presenting the Sihade brand, which focuses on the organic fertilizer market. Founded in November 2022, our mission is to support sustainable farming practices and improve soil health through the development and distribution of high-quality organic fertilizers. 
                At Sihade, we believe in the power of nature and aim to provide eco-friendly solutions that not only benefit farmers but also contribute to environmental preservation. Our products are designed to enhance crop yields while minimizing the impact on the ecosystem. 
                Since our establishment, we have made significant strides in promoting organic farming in Indonesia, ensuring that our fertilizers meet the highest standards of quality and effectiveness. We are dedicated to fostering strong relationships with farmers and agricultural communities, empowering them with the tools they need for successful and sustainable agriculture.                
            </p>
            
            <br />
            <div class="row">
              <div class="col-xl-6">
                <table class="table-custom">
                  <tr>
                    <th>Kantor Pusat</th>
                    <td>: Bandung, Jawa Barat Indonesia</td>
                  </tr>
                  <tr>
                    <th>Industri</th>
                    <td>: Pupuk</td>
                  </tr>
                </table>
              </div>
              <div class="col-xl-6">
                <table class="table-custom">
                  <tr>
                    <th>Situs</th>
                    <td>
                      <a style="color: navy" href="http://www.sihade.com">
                        : http://www.sihade.com
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th>Jumlah Karyawan</th>
                    <td>: 100 karyawan</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
{{-- 
      <section class="section-loker pt-3">
        <h4 class="h5 fw-bold mb-4">Lowongan Saat ini</h4>
        <hr />

        <a href="#">
          <div class="loker-item">
            <p class="loker-title">Content Creator Tiktok</p>
            <p class="loker-location">Bandung</p>
            <p class="loker-date">Dibuat 15 hari yang lalu</p>
          </div>
        </a>
        <a href="#">
          <div class="loker-item">
            <p class="loker-title">Content Creator Tiktok</p>
            <p class="loker-location">Bandung</p>
            <p class="loker-date">Dibuat 15 hari yang lalu</p>
          </div>
        </a>
        <a href="#">
          <div class="loker-item">
            <p class="loker-title">Content Creator Tiktok</p>
            <p class="loker-location">Bandung</p>
            <p class="loker-date">Dibuat 15 hari yang lalu</p>
          </div>
        </a>
      </section> --}}
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')