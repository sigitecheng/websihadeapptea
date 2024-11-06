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
    height: 170vh;
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
            <div class="badge" style="font-size: 14px;"><i class="fas fa-pencil-alt mr-2"></i>Update Data Berkas Sihade</div>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-eye-slash mr-2"></i>........ ........ ........ ........ ........ ........</div>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-eye-slash mr-2"></i>........ ........ ........ ........ ........ ........</div>
        </a>
        <a href="/berkassihade" style="background: white;">
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
                height: 135vh;
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
            
            <form action="{{ route('update.databerkassihade', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST') <!-- Ubah metode menjadi PUT untuk update data -->
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="brosur" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image mr-2"></i> Upload Brosur
                    </label>
                    <button type="button" class="btn btn-success mr-3" onclick="document.getElementById('brosur').click();">
                        Upload Brosur
                    </button>
                    <input style="text-transform: uppercase; display: none;" type="file" class="form-control" id="brosur" name="brosur" accept="application/pdf">
                    
                    <!-- Preview PDF untuk file yang sudah ada -->
                    <div id="brosur_preview_container" style="width: 200px; height: auto; display: {{ $data->brosur ? 'block' : 'none' }};">
                        <embed id="brosur_preview" src="{{ asset('storage/' . $data->brosur) }}" type="application/pdf" width="200px" height="200px" />
                    </div>
                </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const fileInput = document.getElementById('brosur');
                        const previewContainer = document.getElementById('brosur_preview_container');
                        const preview = document.getElementById('brosur_preview');
                
                        fileInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file && file.type === 'application/pdf') {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    // Update the source of the PDF preview
                                    preview.src = e.target.result;
                                    previewContainer.style.display = 'block';  // Show preview container
                                };
                                reader.readAsDataURL(file);
                            } else {
                                alert('Please upload a valid PDF file.');
                            }
                        });
                    });
                </script>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="daftarmerk" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image mr-2"></i> Upload Merk
                    </label>
                    <button type="button" class="btn btn-success mr-3" onclick="document.getElementById('daftarmerk').click();">
                        Upload Merk
                    </button>
                    <input style="text-transform: uppercase; display: none;" type="file" class="form-control" id="daftarmerk" name="daftarmerk" accept="application/pdf">
                    
                    <!-- Preview PDF untuk file yang sudah ada -->
                    <div id="daftarmerk_preview_container" style="width: 200px; height: auto; display: {{ $data->daftarmerk ? 'block' : 'none' }};">
                        <embed id="daftarmerk_preview" src="{{ asset('storage/' . $data->daftarmerk) }}" type="application/pdf" width="200px" height="200px" />
                    </div>
                </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const fileInput = document.getElementById('daftarmerk');
                        const previewContainer = document.getElementById('daftarmerk_preview_container');
                        const preview = document.getElementById('daftarmerk_preview');
                
                        fileInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file && file.type === 'application/pdf') {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    // Update the source of the PDF preview
                                    preview.src = e.target.result;
                                    previewContainer.style.display = 'block';  // Show preview container
                                };
                                reader.readAsDataURL(file);
                            } else {
                                alert('Please upload a valid PDF file.');
                            }
                        });
                    });
                </script>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="nib" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image mr-2"></i> Upload NIB
                    </label>
                    <button type="button" class="btn btn-success mr-3" onclick="document.getElementById('nib').click();">
                        Upload NIB
                    </button>
                    <input style="text-transform: uppercase; display: none;" type="file" class="form-control" id="nib" name="nib" accept="application/pdf">
                    
                    <!-- Preview PDF untuk file yang sudah ada -->
                    <div id="nib_preview_container" style="width: 200px; height: auto; display: {{ $data->nib ? 'block' : 'none' }};">
                        <embed id="nib_preview" src="{{ asset('storage/' . $data->nib) }}" type="application/pdf" width="200px" height="200px" />
                    </div>
                </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const fileInput = document.getElementById('nib');
                        const previewContainer = document.getElementById('nib_preview_container');
                        const preview = document.getElementById('nib_preview');
                
                        fileInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file && file.type === 'application/pdf') {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    // Update the source of the PDF preview
                                    preview.src = e.target.result;
                                    previewContainer.style.display = 'block';  // Show preview container
                                };
                                reader.readAsDataURL(file);
                            } else {
                                alert('Please upload a valid PDF file.');
                            }
                        });
                    });
                </script>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="suratsihade" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image mr-2"></i> Upload Surat Sihade
                    </label>
                    <button type="button" class="btn btn-success mr-3" onclick="document.getElementById('suratsihade').click();">
                        Upload Surat Sihade
                    </button>
                    <input style="text-transform: uppercase; display: none;" type="file" class="form-control" id="suratsihade" name="suratsihade" accept="application/pdf">
                    
                    <!-- Preview PDF untuk file yang sudah ada -->
                    <div id="suratsihade_preview_container" style="width: 200px; height: auto; display: {{ $data->suratsihade ? 'block' : 'none' }};">
                        <embed id="suratsihade_preview" src="{{ asset('storage/' . $data->suratsihade) }}" type="application/pdf" width="200px" height="200px" />
                    </div>
                </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const fileInput = document.getElementById('suratsihade');
                        const previewContainer = document.getElementById('suratsihade_preview_container');
                        const preview = document.getElementById('suratsihade_preview');
                
                        fileInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file && file.type === 'application/pdf') {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    // Update the source of the PDF preview
                                    preview.src = e.target.result;
                                    previewContainer.style.display = 'block';  // Show preview container
                                };
                                reader.readAsDataURL(file);
                            } else {
                                alert('Please upload a valid PDF file.');
                            }
                        });
                    });
                </script>
                
                <div class="form-group">
                    <button style="float: right; font-size:14px;" class="badgenewupdate" type="submit">
                        <i class="fab fa-telegram mr-2"></i>Update
                    </button>
                </div>
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
    

    