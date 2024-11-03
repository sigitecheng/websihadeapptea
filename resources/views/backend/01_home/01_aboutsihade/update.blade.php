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
    height: 205vh;
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
            <div class="badge" style="font-size: 14px;"><i class="fas fa-pencil-alt mr-2"></i>Update Data About Sihade</div>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-eye-slash mr-2"></i>........ ........ ........ ........ ........ ........</div>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-eye-slash mr-2"></i>........ ........ ........ ........ ........ ........</div>
        </a>
        <a href="/aboutsihade" style="background: white;">
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
                height: 165vh;
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
            <form action="{{ route('update.dataaboutsihade', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST') <!-- Gunakan metode PUT untuk update data -->
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="judul" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-heading mr-2"></i> Judul About Sihade
                    </label>
                    <textarea id="judul" name="judul" class="form-control" style="text-transform: uppercase; height: 100px;" required>{{ old('judul', $data->judul) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point1" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 1
                    </label>
                    <textarea id="point1" name="point1" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point1', $data->point1) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point2" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 2
                    </label>
                    <textarea id="point2" name="point2" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point2', $data->point2) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point3" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 3
                    </label>
                    <textarea id="point3" name="point3" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point3', $data->point3) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point4" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 4
                    </label>
                    <textarea id="point4" name="point4" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point4', $data->point4) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point5" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 5
                    </label>
                    <textarea id="point5" name="point5" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point5', $data->point5) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point6" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 6
                    </label>
                    <textarea id="point6" name="point6" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point6', $data->point6) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point7" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 7
                    </label>
                    <textarea id="point7" name="point7" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point7', $data->point7) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point8" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 8
                    </label>
                    <textarea id="point8" name="point8" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point8', $data->point8) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="point9" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-lightbulb mr-2"></i> Point 9
                    </label>
                    <textarea id="point9" name="point9" class="form-control" style="text-transform: uppercase; height: 50px;" required>{{ old('point9', $data->point9) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="keterangan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-comment-dots mr-2"></i> Keterangan
                    </label>
                    <textarea id="keterangan" name="keterangan" class="form-control" style="text-transform: uppercase; height: 300px;" required>{{ old('keterangan', $data->keterangan) }}</textarea>
                </div>
                
                {{-- <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const fileInput = document.getElementById('foto_asosiasi');
                        const preview = document.getElementById('foto_asosiasi-preview');
            
                        fileInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                    });
                </script> --}}
            
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
    

    