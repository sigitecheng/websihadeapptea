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
    height: 130vh;
    margin-left: none;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
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
                background: linear-gradient(to right, yellow, black);
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
                background-color: white;
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
                background-color: white;
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
                background-color: white;
                color: black;
                background: white;
            }
    
    .badgekembali {
                background: linear-gradient(to right, navy, black);
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
                background-color: white;
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
    <div class="badge"><i class="fas fa-map mr-2"></i> Rencana Strategis Pekerjaan Umum dan Penataan Ruang</div>
</a>
      
        <a href="/renstra" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-circle-left mr-2" ></i>Kembali</button>
        </a>
        
        <button class="download-btn badgedownload" id="downloadBtn"><i class="fas fa-download mr-2"></i>Download PDF</button>
                        
                @foreach ($data as $items )
                    
                <a href="/renstra/update/{{$items->judul}}" style="background: white;">
                    <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file mr-2"></i>Update</button>
                </a>
                @endforeach
                        {{-- <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button> --}}
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->
                        
                        <style>
      
.pdf-container {
    text-align:center !important ;
    position: relative;
    padding: 5px; /* Jarak di dalam container */
    width: calc(100% - 20px); /* Lebar 100% dikurangi 20px total dari padding kiri dan kanan */
    max-width: 1000px; /* Lebar maksimal container */
    display: flex;
    flex-direction: column;
    align-items: center !important; /* Menempatkan elemen di tengah horizontal */
    justify-content: center; /* Menempatkan elemen di tengah vertikal */
    height: 85vh; /* Tinggi 85% dari viewport */
    margin: auto; /* Mengatur margin auto untuk sentralisasi */
    border: 1px solid black;
    border-radius: 25px;
    overflow: hidden; /* Menyembunyikan konten yang meluber */
    background-color: #FFCB0F;
    background: linear-gradient(to bottom, yellow, white, black);
    position: relative; /* Mengatur posisi relatif untuk container */
}
.pdf-frame {
    width: calc(100% - 20px); /* Lebar PDF frame dengan jarak 10px di kiri dan kanan */
    height: 100%; /* Tinggi PDF frame sama dengan tinggi container */
    border: none;
    overflow: auto; 
    border-radius: 25px; 
    padding: 5px 5px;/* Mengaktifkan scroll jika konten lebih besar dari ukuran frame */
}

    </style>




{{-- ----------------------------------------------------------------------------- --}}


{{-- ================ --}}
@include('tambahan.alert')
{{-- ================ --}}


<style>
.alert {
    padding: 10px;
    background-color: navy; /* Warna biru */
    color: white;
    margin-bottom: 15px;
    margin-top: 15px;
    position: relative;
    font-size: 16px;
    border-radius: 25px 0px 25px 25px;
}

.alert .closebtn {
    position: absolute;
    top: 0;
    right: 10px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.alert .closebtn:hover {
    color: #000;
}
</style>

{{-- ----------------------------------------------------------------------------- --}}


    @foreach($data as $items )
    <div class="pdf-container mt-4">
        <iframe class="pdf-frame" src="{{ asset('storage/' . $items->peraturan) }}" width="100%" height="600px"></iframe>
    </div>
    
    {{-- <iframe src="{{ asset(public_path('storage/undangundang/01_uud/UU_NO_02_TAHUN_2017.pdf')) }}" width="100%" height="600px"></iframe> --}}

    
    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            // URL file PDF
            const pdfUrl = '{{ asset('storage/' . $items->peraturan) }}';
            
            // Nama file yang diunduh berdasarkan atribut judul
            const fileName = '{{ $items->judul }}' + '.pdf'; // Pastikan menambahkan ekstensi file yang sesuai
            
            // Membuat elemen anchor
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = fileName;
            
            // Menyimulasikan klik pada elemen anchor
            document.body.appendChild(link);
            link.click();
            
            // Menghapus elemen anchor dari dokumen
            document.body.removeChild(link);
        });
    </script>
    
@endforeach


</div>

    
</div>
</div>

             

        </div>

        
                
        </div>
        <hr style="border:0; height:5px; background-color:navy; margin: 20px 0px;">
        @include('backend.00_dashboard.part.menufooter')
    </div>
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    