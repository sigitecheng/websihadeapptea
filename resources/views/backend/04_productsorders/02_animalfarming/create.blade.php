@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content  pl-0">

                    
                <div class="row mb-0 ">
                    <div class="font-bold col-sm-8"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                        
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    margin-top: none;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 125vh;
    margin-left: none;
    background: linear-gradient(to bottom, #90EE90, white, wheat);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center; margin-left:120px;">
    <img src="/assets/icon/lambangsihade.png" alt="Logo SIPJAKIKBB" style="width: 50%; object-fit: cover;">
    {{-- <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;"> --}}
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> Kementrian Pekerjaan Umum Dan Penataan Ruang </span></h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;
            align-items: center;
            "
            >


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">
<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
          
         
          /* Untuk memastikan tata letak responsif, Anda bisa menggunakan media queries */
@media (min-width: 768px) {
    .badge {
                background: linear-gradient(to right, green, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background: white;
                color: black;
                background: white;
            }

    .badgeupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgeupdate:hover {
                background: white;
                color: black;
                background: white;
            }
            
    .badgenewupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgenewupdate:hover {
                background: white;
                color: black;
                background: white;
            }

    
    .badgedownload {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 8px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgedownload:hover {
                background: white;
                color: black;
                background: white;
            }
    
    .badgekembali {
                background: linear-gradient(to right, red, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background: white;
                color: black;
                background: white;
            }
    
    .badgehidden {
                background: linear-gradient(to right, white, white);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
    
}

        </style>
        <a style="background: white;">
            <div class="badge" style="font-size: 14px;"><i class="fas fa-pencil-alt mr-2"></i>Create Data Animal Farming Product</div>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-eye-slash mr-2"></i>........ ........ ........ ........ ........ ........</div>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-eye-slash mr-2"></i>........ ........ ........ ........ ........ ........</div>
        </a>
        <a href="/productanimalfarming" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:14px; cursor:pointer;">
                <i class="fa fa-arrow-circle-left mr-2"></i>Kembali
            </button>
        </a>
        
        <br>
                {{-- ========================================= --}}

        <style>
            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 920px;
                height: 85vh;
                margin: 0 auto;
                padding: 20px;
                background-color: #E0E0E0; /* Warna silver */
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            /* Style untuk .form-group */
            .form-group {
                margin-bottom: 1rem; /* Jarak antar form group */
            }

            /* Style untuk .form-group-inner */
            .form-group-inner {
                display: flex;
                align-items: center; /* Vertikal center alignment */
                margin-bottom: 0.5rem;
            }

            .form-group-inner label {
                flex: 1;
                margin-right: 1rem; /* Jarak antara label dan input */
                text-align: left; /* Label teks rata kiri */
            }

            .form-group-inner input {
                flex: 4;
            }

            .success-message {
                color: green;
                margin-bottom: 20px;
            }

            .preview-container {
            display: flex;
            align-items: center;
        }

        .img-preview {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

            

        }
        </style>
    
<br>
        <div class="container-update" style="col-lg-12">
            <!-- Menampilkan pesan sukses jika ada -->
            @if (session('success'))
                <p class="success-message">{{ session('success') }}</p>
            @endif

            <form action="{{ route('create.dataproductanimalfarming') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="partners_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-user mr-2"></i>Nama Perusahaan
                    </label>
                    <select class="form-control" id="partners_id" name="partners_id" required>
                        <option style="text-transform: uppercase" value="">Pilih Nama Perusahaan</option>
                        @foreach($datapartners as $perusahaan)
                            <option style="text-transform: uppercase" value="{{ $perusahaan->id }}">
                                {{ $perusahaan->namaperusahaan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="peternakan_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-user mr-2"></i>Nama Produk
                    </label>
                    <select class="form-control" id="peternakan_id" name="peternakan_id" required>
                        <option style="text-transform: uppercase" value="">Pilih Nama Produk</option>
                        @foreach($datapeternakan as $namaproduk)
                            <option style="text-transform: uppercase" value="{{ $namaproduk->id }}">
                                {{ $namaproduk->namaproduk }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="kuantiti" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-briefcase mr-2"></i> Kuantiti
                    </label>
                    <input style="text-transform: uppercase;" type="number" class="form-control" id="kuantiti" name="kuantiti" value="{{ old('kuantiti') }}" required>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="hargasatuan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-briefcase mr-2"></i> Harga Satuan
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input style="text-transform: uppercase;" type="text" class="form-control" id="hargasatuan" name="hargasatuan" value="{{ old('hargasatuan') }}" required>
                    </div>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="totalharga" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-briefcase mr-2"></i> Total Harga
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input style="text-transform: uppercase;" type="text" class="form-control" id="totalharga" name="totalharga" value="{{ old('totalharga') }}" readonly required>
                    </div>
                </div>
                
                <script>
                    // Format angka menjadi Rupiah
                    function formatRupiah(angka) {
                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                            split = number_string.split(','),
                            sisa = split[0].length % 3,
                            rupiah = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                
                        if (ribuan) {
                            separator = sisa ? '.' : '';
                            rupiah += separator + ribuan.join('.');
                        }
                
                        rupiah = split[1] ? rupiah + ',' + split[1].substr(0, 2) : rupiah;
                        return rupiah ? rupiah : '';
                    }
                
                    // Menghapus format Rupiah dan mengembalikan ke angka murni
                    function removeRupiah(rupiah) {
                        return rupiah.replace(/[^\d]/g, '');
                    }
                
                    // Menghitung total harga berdasarkan harga satuan dan kuantiti
                    function hitungTotalHarga() {
                        var kuantiti = document.getElementById('kuantiti').value;
                        var hargasatuan = document.getElementById('hargasatuan').value;
                
                        // Pastikan kuantiti dan harga satuan adalah angka yang valid
                        if (kuantiti && hargasatuan) {
                            var hargasatuanNumerik = removeRupiah(hargasatuan); // Hapus format Rupiah
                            var totalHarga = parseFloat(kuantiti) * parseFloat(hargasatuanNumerik);
                            document.getElementById('totalharga').value = formatRupiah(totalHarga.toString());
                        } else {
                            document.getElementById('totalharga').value = 'Rp 0';
                        }
                    }
                
                    // Event listener untuk perubahan di harga satuan atau kuantiti
                    document.getElementById('kuantiti').addEventListener('input', hitungTotalHarga);
                    document.getElementById('hargasatuan').addEventListener('input', function(e) {
                        // Format harga satuan saat input
                        var inputValue = e.target.value;
                        e.target.value = formatRupiah(removeRupiah(inputValue));
                        hitungTotalHarga(); // Update total harga setelah format
                    });
                
                    // Inisialisasi format Rupiah saat focus dan blur untuk hargasatuan
                    document.getElementById('hargasatuan').addEventListener('focus', function(e) {
                        var inputValue = e.target.value;
                        e.target.value = removeRupiah(inputValue); // Hapus format Rupiah saat focus
                    });
                
                    document.getElementById('hargasatuan').addEventListener('blur', function(e) {
                        var inputValue = e.target.value;
                        e.target.value = formatRupiah(inputValue); // Kembalikan format Rupiah saat blur
                        hitungTotalHarga(); // Update total harga setelah format
                    });
                
                    // Pastikan total harga sudah dihitung saat pertama kali halaman dimuat
                    document.addEventListener('DOMContentLoaded', hitungTotalHarga);
                </script>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="tanggalpemesanan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-briefcase mr-2"></i> Tanggal Pemesanan
                    </label>
                    <input style="text-transform: uppercase;" type="date" class="form-control" id="tanggalpemesanan" name="tanggalpemesanan" value="{{ old('tanggalpemesanan') }}" required readonly>
                </div>
                
                <script>
                    // Fungsi untuk mendapatkan tanggal hari ini dalam format YYYY-MM-DD
                    function setTanggalPemesanan() {
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0'); // Mengambil tanggal dengan dua digit
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); // Mengambil bulan dengan dua digit (0-based)
                        var yyyy = today.getFullYear(); // Mengambil tahun 4 digit
                
                        today = yyyy + '-' + mm + '-' + dd; // Format YYYY-MM-DD
                        document.getElementById('tanggalpemesanan').value = today; // Mengatur nilai input
                    }
                
                    // Jalankan fungsi setTanggalPemesanan saat halaman dimuat
                    window.onload = setTanggalPemesanan;
                </script>        


                <div class="form-group">
                    <button style="float: right; font-size:14px;" class="badgenewupdate" type="submit">
                        <i class="fab fa-telegram mr-2"></i>Create
                    </button>
                </div>

                
                <script>

                    
                    document.querySelector('form').addEventListener('submit', function(event) {
                        // Menghapus format Rupiah sebelum submit
                        document.getElementById('hargasatuan').value = removeRupiah(document.getElementById('hargasatuan').value);
                        document.getElementById('totalharga').value = removeRupiah(document.getElementById('totalharga').value);
                    });
                    </script>
                
            </form>
            
            
            
        </div>


        {{-- ========================================= --}}

        {{-- @foreach ($data as $items )
                    
                <a href="/peruud/{{$items->peraturan}}" style="background: white;">
                    <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button>
                </a>
                @endforeach
                        <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button> --}}
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->
                        
      

</div>

    
</div>
</div>

             

        </div>

        
                
        </div>
        <hr style="border:0; height:5px; background-color:green; margin: 20px 0px;">
        @include('backend.00_dashboard.part.menufooter')
    </div>
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    