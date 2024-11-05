
        <!--Main Content-->

        <div class="row main-content h-screen" style="color: #22BB22;">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center" style="background:white; ">
                        
                        <div class="div">
                        {{-- @foreach ($user as $item ) --}}
                            <p style="margin-top:10px;"></p>
                        <span style="background-color: navy; color: white; padding: 5px; border-radius: 3px; font-size:16px;">
                            {{-- {{$user->name}} --}}
                        </span>
                        
                    </div>
                    {{-- <img src="{{asset('storage/' . $user->avatar)}}" alt="" class="rounded-circle" style="margin-bottom:25px; border: 1px solid #000; border-radius: 50%; display: inline-block; overflow: hidden; "/> --}}
                    
                    {{-- @endforeach                             --}}
                        
                       <br>
                    </span>
                    
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                        <style>
                        /* Default link style */
                        .sbar {
                        color: white; /* warna biru tua */
                        text-decoration: none; /* menghapus garis bawah default */
                        background-image: linear-gradient(to right, black, white); /* gradasi dari biru tua ke hitam */
                        background-size: 100% 200%; /* ukuran gradient vertikal */
                        background-position: 0 100%; /* posisi gradient dari bawah */
                        transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                        padding: 5px 10px; /* spasi dalam tautan */
                        }

                        a {
                        /* font-size: 12px; */
                        color: #22BB22; /* warna biru tua */
                        text-decoration: none; /* menghapus garis bawah default */
                        background-image: linear-gradient(to bottom, black, black); /* gradasi dari biru tua ke hitam */
                        background-size: 100% 200%; /* ukuran gradient vertikal */
                        background-position: 0 100%; /* posisi gradient dari bawah */
                        transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                        padding: 5px 10px; /* spasi dalam tautan */
                        }

                        /* Hover effect */
                        a:hover {
                            background: linear-gradient(to right, #00ff00, black); /* gradasi dari kuning ke hitam */
                            background-size: 100% 200%; /* ukuran gradient vertikal */
                            background-position: 0 100%; /* posisi gradient dari bawah */
                            transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                            padding: 5px 10px; /
                         } 
                         
                        span {
                            font-size: 12px;
                         } 
                         
                         
                         </style>
                         
                         <li class="parent">
                            <a href="/" target="_blank" class="sbar">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                <span class="none">DASHBOARD USERS</span>
                            </a>
                        </li>
                        
                        
     
                        <li class="parent">
                            <a href="/dashboard" class="sbar"><i class="fas fa-home mr-2"></i>
                                <span class="none">DASHBOARD ADMIN</span>
                            </a>
                        </li>
                        
                           <p style="margin-bottom: 5px;"></p>
                           {{-- <li class="parent">
                            <a href="/himbauandinas" class="sbar"><i class="fas fa-newspaper mr-2"></i>
                                <span class="none">BERITA HIMBAUAN DINAS</span>
                            </a>
                        </li>
                         --}}
                           
                         <li class="parent">
                            <a href="#" onclick="toggle_menu('home'); return false" class="sbar">
                                <i class="fas fa-user-circle mr-2"></i>
                                <span>HOME<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                            </a>
                        
                            <ul class="children" id="home">
                                <li class="child">
                                    <a href="/aboutsihade" style="font-size: 12px;">
                                        <i class="fas fa-info-circle mr-2" style="margin-left: 20px;"></i>ABOUT SIHADE
                                    </a>
                        
                                    <a href="/whysihade" style="font-size: 12px;">
                                        <i class="fas fa-question-circle mr-2" style="margin-left: 20px;"></i>WHY SIHADE
                                    </a>
                        
                                    <a href="/testimoni" style="font-size: 12px;">
                                        <i class="fas fa-comments mr-2" style="margin-left: 20px;"></i>TESTIMONIALS
                                    </a>
                        
                                    <a href="/FAQ" style="font-size: 12px;">
                                        <i class="fas fa-question-circle mr-2" style="margin-left: 20px;"></i>FREQUENTLY ASKED QUESTIONS
                                    </a>
                        
                                    <a href="/contactus" style="font-size: 12px;">
                                        <i class="fas fa-envelope mr-2" style="margin-left: 20px;"></i>CONTACT US
                                    </a>
                                </li>
                            </ul>
                        </li>
                        


                           
                         <li class="parent">
                            <a href="#" onclick="toggle_menu('company'); return false" class="sbar">
                                <i class="fas fa-building mr-2"></i> <!-- Ganti dengan ikon gedung untuk Company -->
                                <span>COMPANY<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                            </a>
                            
                            <ul class="children" id="company">
                                <li class="child">
                                    <a href="/company" style="font-size: 12px;">
                                        <i class="fas fa-building mr-2" style="margin-left: 20px;"></i>DATA COMPANY
                                    </a>
                        
                                </li>
                            </ul>
                        </li>
                        
                           
                         <li class="parent">
                            <a href="#" onclick="toggle_menu('products'); return false" class="sbar">
                                <i class="fas fa-box mr-2"></i> <!-- Ganti dengan ikon kotak untuk Produk -->
                                <span>PRODUCTS<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                            </a>
                            
                            <ul class="children" id="products">
                                <li class="child">
                                    <a href="/bepertanian" style="font-size: 12px;">
                                        <i class="fas fa-seedling mr-2" style="margin-left: 20px;"></i>AGRICULTURE
                                    </a>
                                </li>
                                <li class="child">
                                    <a href="/beperternakan" style="font-size: 12px;">
                                        <i class="fas fa-paw mr-2" style="margin-left: 20px;"></i>ANIMAL FARMING
                                    </a>
                                </li>
                                <li class="child">
                                    <a href="/beperkebunan" style="font-size: 12px;">
                                        <i class="fas fa-tree mr-2" style="margin-left: 20px;"></i>PLANTATION
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        
                           
                         <li class="parent">
                            <a href="#" onclick="toggle_menu('pesanan'); return false" class="sbar">
                                <i class="fas fa-shopping-cart mr-2"></i> <!-- Ikon keranjang untuk Produk -->
                                <span>PRODUCT ORDER<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                            </a>
                            
                            <ul class="children" id="pesanan">
                                <li class="child">
                                    <a href="/productagriculture" style="font-size: 12px;">
                                        <i class="fas fa-tractor mr-2" style="margin-left: 20px;"></i>PRODUCT AGRICULTURE
                                    </a>
                                </li>
                                <li class="child">
                                    <a href="/productanimalfarming" style="font-size: 12px;">
                                        <i class="fas fa-piggy-bank mr-2" style="margin-left: 20px;"></i>PRODUCT ANIMAL FARMING
                                    </a>
                                </li>
                                <li class="child">
                                    <a href="/beperkebunan" style="font-size: 12px;">
                                        <i class="fas fa-leaf mr-2" style="margin-left: 20px;"></i>PRODUCT PLANTATION
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                        





                            {{-- <li class="parent">
                                <a href="#" onclick="toggle_menu('spm'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>SPM<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="spm">
                                    <li class="child">
                                                                             
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>INFORMASI SPM
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>LAPORAN SPM 
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                          --}}

                            {{-- <li class="parent">
                                <a href="#" onclick="toggle_menu('dukunganusaha'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>DUKUNGAN USAHA<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="dukunganusaha">
                                    <li class="child">
                                                                             
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERMODALAN
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>JAMINAN USAHA 
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>MITRA USAHA 
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                             --}}
                            
{{--                          
                            <li class="parent">
                                <a href="/404" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">BADAN USAHA</span>
                                </a>
                            </li>
                         
                            <li class="parent">
                                <a href="/404" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">SERTIFIKAT BADAN USAHA</span>
                                </a>
                            </li> --}}
                        <p style="margin-bottom: 5px;"></p>
                            <li class="parent">
                                <a href="/qapertanyaan" class="sbar"><i class="fas fa-question-circle mr-2"></i>
                                    <span class="none">Q&A PUBLIK</span>
                                </a>
                            </li>
                            
                         <p style="margin-bottom: 5px;"></p>
                         
                         <li class="parent">
                            <a href="#" onclick="toggle_menu('settingsmenu'); return false" class="sbar">
                                <i class="fas fa-cogs mr-2"></i> <!-- Ikon untuk pelatihan -->
                                <span>SETTINGS<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                            </a>
                            <ul class="children" id="settingsmenu">
                                <li class="child">
                                    <a href="/settingsalldata" style="font-size: 12px;">
                                        <i class="fas fa-database mr-2" style="margin-left: 20px;"></i>ALL DATA
                                    </a>
                                    
                                    <a href="/settingstatusadmin" style="font-size: 12px;">
                                        <i class="fas fa-user-shield mr-2" style="margin-left: 20px;"></i>STATUS ADMIN
                                    </a>
                                    
                                    <a href="/settingkecamatan" style="font-size: 12px;">
                                        <i class="fas fa-map-marker-alt mr-2" style="margin-left: 20px;"></i>KECAMATAN/KOTA
                                    </a>
                                    
                                    <a href="/settingqasebagai" style="font-size: 12px;">
                                        <i class="fas fa-clipboard-list mr-2" style="margin-left: 20px;"></i>QA SEBAGAI
                                    </a>
                                    
                                    <a href="/settingqapertanyaan" style="font-size: 12px;">
                                        <i class="fas fa-question-circle mr-2" style="margin-left: 20px;"></i>QA PERTANYAAN
                                    </a>
                                    
                                    <a href="/settingmetodepengadaan" style="font-size: 12px;">
                                        <i class="fas fa-database mr-2" style="margin-left: 20px;"></i>METODE PENGADAAN
                                    </a>
                                    
                                    <a href="/settingpengawasanbangunangedung" style="font-size: 12px;">
                                        <i class="fas fa-building mr-2" style="margin-left: 20px;"></i>PENGAWASAN BANGUNAN GEDUNG
                                    </a>
                                    
                                    <a href="/settingpengawasanstatus" style="font-size: 12px;">
                                        <i class="fas fa-check-circle mr-2" style="margin-left: 20px;"></i>PENGAWASAN STATUS
                                    </a>
                                    
                                    <a href="/settingpengawasantindakan" style="font-size: 12px;">
                                        <i class="fas fa-exclamation-triangle mr-2" style="margin-left: 20px;"></i>PENGAWASAN TINDAKAN
                                    </a>
                                    
                                    <a href="/settingagendastatus" style="font-size: 12px;">
                                        <i class="fas fa-calendar-check mr-2" style="margin-left: 20px;"></i>AGENDA STATUS
                                    </a>
                                    
                                    <a href="/settingketerampilanpekerja" style="font-size: 12px;">
                                        <i class="fas fa-users-cog mr-2" style="margin-left: 20px;"></i>KETERAMPILAN PEKERJA
                                    </a>
                                    
                                    <a href="/settingtahunpilihan" style="font-size: 12px;">
                                        <i class="fas fa-calendar-alt mr-2" style="margin-left: 20px;"></i>TAHUN REGISTRASI
                                    </a>
                                    
                                    {{-- 
                                    <a href="/404" style="font-size: 12px;">
                                        <i class="fas fa-laptop mr-2" style="margin-left: 20px;"></i>TEKNOLOGI <!-- Ikon untuk teknologi -->
                                    </a> 
                                    --}}
                                </li>
                            </ul>
                        </li>
                        
                    
                         <p style="margin-bottom: 5px;"></p>

                         <li class="parent">
                            <a href="/administrator" class="sbar">
                                <i class="fas fa-user-shield mr-2"></i> <!-- Ikon untuk administrator -->
                                <span class="none">ADMINISTRATOR</span>
                            </a>
                        </li>
                        
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->
