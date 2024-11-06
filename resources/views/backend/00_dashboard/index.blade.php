@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')

<!-- Page Wrapper -->
<div class="col-sm-9 col-xs-12 content pl-0">
<style>

.loader {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
    font-size: 24px;
}

.dashboard {
    padding: 20px;
}

.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
    display: inline-block;
    width: calc(50% - 40px);
}

.fade-in {
    animation: fadeIn 0.5s ease-in;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.notification {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    display: none;
}

@keyframes slideIn {
    from {
        transform: translateY(100%);
    }
    to {
        transform: translateY(0);
    }
}

</style>
    
    <div style="width: 100%; height: auto; padding: 3px; background-color: green; border: none; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
        <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 30px; padding: 0; background: transparent; border: none;">
            <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
                <i class="fas fa-database mr-2"></i>DASHBOARD HALAMAN SISTEM INFORMASI PT. HAZNIA BINA VIROFARM
            </p>
        </button>
    </div>
    
    
    <div class="mt-0 mb-2 button-container">
    <div class="row pl-1" style="margin-left: -3px; margin-right: -3px;">
        
        <a href="/aboutsihade" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>ABOUT SIHADE</strong></small>
                    </h5>

                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-info-circle" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahaboutsihade}} Data
                    </div>

                </div>
            </div>
        </a>
    
    
        <a href="/whysihade" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>WHY SIHADE</strong></small>
                    </h5>

                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-lightbulb" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahwhysihade}} Data
                    </div>

                </div>
            </div>
        </a>
    
    
    
        <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>TESTIMONI</strong></small>
                    </h5>

                    <div class="text-center" style="font-size:14px;">
                        <i class="fas  fa-quote-right" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahtestimoni}} Data
                    </div>

                </div>
            </div>
        </a>
    
    
        <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>F.A.Q</strong></small>
                    </h5>

                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-question-circle" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahfaq}} Data
                    </div>

                </div>
            </div>
        </a>
    
        
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>MITRA</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-handshake" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahmitra}} Data
                        </div>
    
                    </div>
                </div>
            </a>
        
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>PERTANIAN</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-seedling" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahprodukpertanian}} Data
                        </div>
    
                    </div>
                </div>
            </a>
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>PETERNAKAN</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-paw" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahprodukpeternakan}} Data
                        </div>
    
                    </div>
                </div>
            </a>
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>PERKEBUNAN</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-tree" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahprodukperkebunan}} Data
                        </div>
    
                    </div>
                </div>
            </a>
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>AGRICULTURE ORDER</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-clipboard-list" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahprodukorderpertanian}} Data
                        </div>
    
                    </div>
                </div>
            </a>
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>ANIMAL FARMING ORDER</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-clipboard-check" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahprodukorderpeternakan}} Data
                        </div>
    
                    </div>
                </div>
            </a>
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>PLANTATIONS ORDER</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-clipboard-check" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahprodukorderperkebunan}} Data
                        </div>
    
                    </div>
                </div>
            </a>
        
            <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                         onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                         onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>BERKAS SIHADE</strong></small>
                        </h5>
    
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-file-alt" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahberkas}} Data
                        </div>
    
                    </div>
                </div>
            </a>
    
    </div>
        </div>
        
@include('backend.00_dashboard.part.menufooter')

</div>

@include('backend.00_dashboard.part.footer')
