<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------- FRONTEND HALAMAN UTAMA SIPJAKI BANDUNG BARAT --------------------------

Route::get('/', [FedashboardController::class, 'index']);  
Route::get('/perusahaan', [FedashboardController::class, 'perusahaan']);  
Route::get('/perusahaandetails', [FedashboardController::class, 'perusahaandetails']);  

Route::get('/pertanian', [FedashboardController::class, 'pertanian']);  
Route::get('/pertaniandetails/{namaproduk}', [FedashboardController::class, 'pertaniandetails']);  

Route::get('/peternakan', [FedashboardController::class, 'peternakan']);  
Route::get('/peternakandetails/{namaproduk}', [FedashboardController::class, 'peternakandetails']);  

Route::get('/perkebunan', [FedashboardController::class, 'perkebunan']);  
Route::get('/perkebunandetails/{namaproduk}', [FedashboardController::class, 'perkebunandetails']);  

Route::get('/job', [FedashboardController::class, 'job']);  
Route::get('/mitrakami', [FedashboardController::class, 'mitrakami']);  
Route::get('/pertanyaan', [FedashboardController::class, 'pertanyaan']);  
Route::get('/kontak', [FedashboardController::class, 'kontak']);  
// Route::post('/qapertanyaanstore', [FedashboardController::class, 'createbarustorepertanyaan'])->middleware('auth')->name('create.storeqapertanyaanbaru');
// Route::post('/qapertanyaanstorebaru', [FedashboardController::class, 'createstorepertanyaanpublik'])->middleware('auth')->name('createpertanyaanstorebaru');
// Route::post('/qapertanyaanstorebaru', [AdministratorController::class, 'createstorepertanyaanpublik'])->name('createpertanyaanstorebaru');




// Route::get('/portalberita', function () {
//     // return view('welcome');
//     return view('portalberita', [
//         'title' => 'Portal Berita',
//     ]);
// });

    
Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});


// Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');  
Route::get('/dashboardadmin', [AdminDashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// ------------------- BACKEND BAGIAN HOME (01) --------------------------- 

// -------- BAGIAN 01 BACKEND DATA PROFIL HOME SIHADE  ---------------------------------
Route::get('/aboutsihade', [AdminDashboardController::class, 'aboutsihade'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/aboutsihade/update/{id}', [AdminDashboardController::class, 'updatedataaboutsihade'])->middleware('auth')->name('updateshow.aboutsihade');
Route::post('/aboutsihadeupdatestore/{id}', [AdminDashboardController::class, 'createupdatedataaboutsihade'])->middleware('auth')->name('update.dataaboutsihade');
// Route::get('/databeritacreate', [BeritaController::class, 'createnewdataberita'])->middleware('auth');
// Route::post('/databeritastore', [BeritaController::class, 'createnewstoredataberita'])->middleware('auth')->name('create.databerita');

// Route::post('/databerita/{judul}', [BeritaController::class, 'deletedataberita'])
// ->middleware('auth')
// ->name('delete.databerita');

// -------- BAGIAN 02 BACKEND DATA WHYSIHADE  ---------------------------------
Route::get('/whysihade', [AdminDashboardController::class, 'whysihade'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/whysihade/update/{id}', [AdminDashboardController::class, 'updatedatawhysihade'])->middleware('auth')->name('updateshow.whysihade');
Route::post('/whysihadeupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatawhysihade'])->middleware('auth')->name('update.datawhysihade');
// Route::get('/databeritacreate', [BeritaController::class, 'createnewdataberita'])->middleware('auth');
// Route::post('/databeritastore', [BeritaController::class, 'createnewstoredataberita'])->middleware('auth')->name('create.databerita');

// Route::post('/databerita/{judul}', [BeritaController::class, 'deletedataberita'])
// ->middleware('auth')
// ->name('delete.databerita');

// -------- BAGIAN 03 BACKEND DATA TESTIMONI  ---------------------------------
Route::get('/testimoni', [AdminDashboardController::class, 'testimoni'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/testimoni/update/{id}', [AdminDashboardController::class, 'updatedatatestimoni'])->middleware('auth')->name('updateshow.testimoni');
Route::post('/testimoniupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatatestimoni'])->middleware('auth')->name('update.datatestimoni');
Route::get('/testimonicreate', [AdminDashboardController::class, 'createnewdatatestimoni'])->middleware('auth');
Route::post('/datatestimonistore', [AdminDashboardController::class, 'createnewstoredatatestimoni'])->middleware('auth')->name('create.datatestimoni');

Route::post('/testimoni/{id}', [AdminDashboardController::class, 'deletedatatestimoni'])
->middleware('auth')
->name('delete.datatestimoni');

// -------- BAGIAN 04 FAQ  ---------------------------------
Route::get('/FAQ', [AdminDashboardController::class, 'FAQ'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/FAQ/update/{id}', [AdminDashboardController::class, 'updatedataFAQ'])->middleware('auth')->name('updateshow.FAQ');
Route::post('/FAQupdatestore/{id}', [AdminDashboardController::class, 'createupdatedataFAQ'])->middleware('auth')->name('update.dataFAQ');
// Route::get('/FAQcreate', [AdminDashboardController::class, 'createnewdataFAQ'])->middleware('auth');
// Route::post('/dataFAQstore', [AdminDashboardController::class, 'createnewstoredataFAQ'])->middleware('auth')->name('create.dataFAQ');

Route::post('/FAQ/{id}', [AdminDashboardController::class, 'deletedataFAQ'])
->middleware('auth')
->name('delete.dataFAQ');

// -------- BAGIAN 05 CONTACTS US  ---------------------------------
Route::get('/contactus', [AdminDashboardController::class, 'contactus'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/contactus/update/{id}', [AdminDashboardController::class, 'updatedatacontactus'])->middleware('auth')->name('updateshow.contactus');
Route::post('/contactusupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatacontactus'])->middleware('auth')->name('update.datacontactus');
// Route::get('/FAQcreate', [AdminDashboardController::class, 'createnewdataFAQ'])->middleware('auth');
// Route::post('/dataFAQstore', [AdminDashboardController::class, 'createnewstoredataFAQ'])->middleware('auth')->name('create.dataFAQ');

// -------- BAGIAN COMPANY  ---------------------------------
Route::get('/company', [AdminDashboardController::class, 'company'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/company/update/{id}', [AdminDashboardController::class, 'updatedatacompany'])->middleware('auth')->name('updateshow.company');
Route::post('/companyupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatacompany'])->middleware('auth')->name('update.datacompany');
Route::get('/companycreate', [AdminDashboardController::class, 'createnewdatacompany'])->middleware('auth');
Route::post('/datacompanystore', [AdminDashboardController::class, 'createnewstoredatacompany'])->middleware('auth')->name('create.datacompany');


Route::post('/company/{id}', [AdminDashboardController::class, 'deletedatacompany'])
->middleware('auth')
->name('delete.datacompany');

// -------- BAGIAN BE PERTANIAN  ---------------------------------
Route::get('/bepertanian', [AdminDashboardController::class, 'bepertanian'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/bepertanian/update/{id}', [AdminDashboardController::class, 'updatedatabepertanian'])->middleware('auth')->name('updateshow.bepertanian');
Route::post('/bepertanianupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatabepertanian'])->middleware('auth')->name('update.databepertanian');
Route::get('/bepertaniancreate', [AdminDashboardController::class, 'createnewdatabepertanian'])->middleware('auth');
Route::post('/databepertanianstore', [AdminDashboardController::class, 'createnewstoredatabepertanian'])->middleware('auth')->name('create.databepertanian');


Route::post('/bepertanian/{id}', [AdminDashboardController::class, 'deletedatabepertanian'])
->middleware('auth')
->name('delete.databepertanian');

// -------- BAGIAN BE PERTERNAKAN  ---------------------------------
Route::get('/beperternakan', [AdminDashboardController::class, 'beperternakan'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/beperternakan/update/{id}', [AdminDashboardController::class, 'updatedatabeperternakan'])->middleware('auth')->name('updateshow.beperternakan');
Route::post('/beperternakanupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatabeperternakan'])->middleware('auth')->name('update.databeperternakan');
Route::get('/beperternakancreate', [AdminDashboardController::class, 'createnewdatabeperternakan'])->middleware('auth');
Route::post('/databeperternakanstore', [AdminDashboardController::class, 'createnewstoredatabeperternakan'])->middleware('auth')->name('create.databeperternakan');


Route::post('/beperternakan/{id}', [AdminDashboardController::class, 'deletedatabeperternakan'])
->middleware('auth')
->name('delete.databeperternakan');

// -------- BAGIAN BE PERKEBUNAN  ---------------------------------
Route::get('/beperkebunan', [AdminDashboardController::class, 'beperkebunan'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/beperkebunan/update/{id}', [AdminDashboardController::class, 'updatedatabeperkebunan'])->middleware('auth')->name('updateshow.beperkebunan');
Route::post('/beperkebunanupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatabeperkebunan'])->middleware('auth')->name('update.databeperkebunan');
Route::get('/beperkebunancreate', [AdminDashboardController::class, 'createnewdatabeperkebunan'])->middleware('auth');
Route::post('/databeperkebunanstore', [AdminDashboardController::class, 'createnewstoredatabeperkebunan'])->middleware('auth')->name('create.databeperkebunan');


Route::post('/beperkebunan/{id}', [AdminDashboardController::class, 'deletedatabeperkebunan'])
->middleware('auth')
->name('delete.databeperkebunan');

// -------- BAGIAN PRODUCTS AGRICULTURE  ---------------------------------
Route::get('/productagriculture', [AdminDashboardController::class, 'productagriculture'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/productagriculture/update/{id}', [AdminDashboardController::class, 'updatedataproductagriculture'])->middleware('auth')->name('updateshow.productagriculture');
Route::post('/productagricultureupdatestore/{id}', [AdminDashboardController::class, 'createupdatedataproductagriculture'])->middleware('auth')->name('update.productagriculture');
Route::get('/productagriculturecreate', [AdminDashboardController::class, 'createnewdataproductagriculture'])->middleware('auth');
Route::post('/dataproductagriculturestore', [AdminDashboardController::class, 'createnewstoredataproductagriculture'])->middleware('auth')->name('create.dataproductagriculture');


Route::post('/productagriculture/{id}', [AdminDashboardController::class, 'deletedataproductagriculture'])
->middleware('auth')
->name('delete.dataproductagriculture');

// -------- BAGIAN PRODUCTS PETERNAKAN  ---------------------------------
Route::get('/productanimalfarming', [AdminDashboardController::class, 'productanimalfarming'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/productanimalfarming/update/{id}', [AdminDashboardController::class, 'updatedataproductanimalfarming'])->middleware('auth')->name('updateshow.productanimalfarming');
Route::post('/productanimalfarmingupdatestore/{id}', [AdminDashboardController::class, 'createupdatedataproductanimalfarming'])->middleware('auth')->name('update.productanimalfarming');
Route::get('/productanimalfarmingcreate', [AdminDashboardController::class, 'createnewdataproductanimalfarming'])->middleware('auth');
Route::post('/dataproductanimalfarmingstore', [AdminDashboardController::class, 'createnewstoredataproductanimalfarming'])->middleware('auth')->name('create.dataproductanimalfarming');

Route::post('/productanimalfarming/{id}', [AdminDashboardController::class, 'deletedataproductanimalfarming'])
->middleware('auth')
->name('delete.dataproductanimalfarming');

// -------- BAGIAN PRODUCTS PERKEBUNAN  ---------------------------------
Route::get('/productplantations', [AdminDashboardController::class, 'productplantations'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/productplantations/update/{id}', [AdminDashboardController::class, 'updatedataproductplantations'])->middleware('auth')->name('updateshow.productplantations');
Route::post('/productplantationsupdatestore/{id}', [AdminDashboardController::class, 'createupdatedataproductplantations'])->middleware('auth')->name('update.productplantations');
Route::get('/productplantationscreate', [AdminDashboardController::class, 'createnewdataproductplantations'])->middleware('auth');
Route::post('/dataproductplantationsstore', [AdminDashboardController::class, 'createnewstoredataproductplantations'])->middleware('auth')->name('create.dataproductplantations');

Route::post('/productplantations/{id}', [AdminDashboardController::class, 'deletedataproductplantations'])
->middleware('auth')
->name('delete.dataproductplantations');


// -------- BAGIAN QA PERTANYAAN USERS  ---------------------------------
Route::get('/pertanyaanusers', [AdminDashboardController::class, 'pertanyaanusers'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
// Route::get('/beperkebunan/update/{id}', [AdminDashboardController::class, 'updatedatabeperkebunan'])->middleware('auth')->name('updateshow.beperkebunan');
// Route::post('/beperkebunanupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatabeperkebunan'])->middleware('auth')->name('update.databeperkebunan');
Route::get('/pertanyaanuserscreate', [AdminDashboardController::class, 'createnewdatapertanyaanusers'])->middleware('auth');
Route::post('/datapertanyaanusersstore', [FedashboardController::class, 'createnewstoredatapertanyaanusers'])->name('create.pertanyaanusers');


Route::post('/pertanyaanusers/{id}', [AdminDashboardController::class, 'deletedatapertanyaanusers'])
->middleware('auth')
->name('delete.datapertanyaanusers');

// -------- BAGIAN BERKAS SIHADE  ---------------------------------
Route::get('/berkassihade', [AdminDashboardController::class, 'berkassihade'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/berkassihade/update/{id}', [AdminDashboardController::class, 'updatedataberkassihade'])->middleware('auth')->name('updateshow.berkassihade');
Route::post('/berkassihadeupdatestore/{id}', [AdminDashboardController::class, 'createupdatedataberkassihade'])->middleware('auth')->name('update.databerkassihade');
// Route::get('/pertanyaanuserscreate', [AdminDashboardController::class, 'createnewdatapertanyaanusers'])->middleware('auth');
// Route::post('/datapertanyaanusersstore', [FedashboardController::class, 'createnewstoredatapertanyaanusers'])->name('create.pertanyaanusers');


Route::post('/berkassihade/{id}', [AdminDashboardController::class, 'deletedataberkassihade'])
->middleware('auth')
->name('delete.databerkassihade');

// -------- BAGIAN BERKAS SIHADE  ---------------------------------
Route::get('/berkassihade', [AdminDashboardController::class, 'berkassihade'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/berkassihade/update/{id}', [AdminDashboardController::class, 'updatedataberkassihade'])->middleware('auth')->name('updateshow.berkassihade');
Route::post('/berkassihadeupdatestore/{id}', [AdminDashboardController::class, 'createupdatedataberkassihade'])->middleware('auth')->name('update.databerkassihade');
// Route::get('/pertanyaanuserscreate', [AdminDashboardController::class, 'createnewdatapertanyaanusers'])->middleware('auth');
// Route::post('/datapertanyaanusersstore', [FedashboardController::class, 'createnewstoredatapertanyaanusers'])->name('create.pertanyaanusers');


Route::post('/berkassihade/{id}', [AdminDashboardController::class, 'deletedataberkassihade'])
->middleware('auth')
->name('delete.databerkassihade');

// -------- BAGIAN BERKAS SIHADE  ---------------------------------
Route::get('/partners', [AdminDashboardController::class, 'partners'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/partners/update/{id}', [AdminDashboardController::class, 'updatedatapartners'])->middleware('auth')->name('updateshow.partners');
Route::post('/partnersupdatestore/{id}', [AdminDashboardController::class, 'createupdatedatapartners'])->middleware('auth')->name('update.datapartners');
Route::get('/partnerscreate', [AdminDashboardController::class, 'createnewdatapartners'])->middleware('auth');
Route::post('/datapartnersstore', [AdminDashboardController::class, 'createnewstoredatapartners'])->name('create.datapartners');

Route::post('/partners/{id}', [AdminDashboardController::class, 'deletedatapartners'])
->middleware('auth')
->name('delete.datapartners');

// ------------------- BACKEND QA PERTANYAAN --------------------------- 

// KATEGORI ADMIN  
// Route::get('/qapertanyaan', [AdministratorController::class, 'qapertanyaan'])->middleware('auth');  
// Route::get('/qapertanyaancreate', [AdministratorController::class, 'createqapertanyaan'])->middleware('auth');
// Route::post('/qapertanyaanstore', [AdministratorController::class, 'createstoreqapertanyaan'])->name('create.qapertanyaan');
// Route::post('/qapertanyaan/{id}', [AdministratorController::class, 'deleteqapertanyaan'])
// ->middleware('auth')
// ->name('delete.qapertanyaan');

// ------------------- BACKEND BAGIAN HIMBAUAN DINAS --------------------------- 


// -------- BAGIAN 02 BACKEND DATA BERITA JASA KONSTRUKSI  ---------------------------------
//  -------------- DATA BERITA UNTUK BACKEND JASA KONSTRUKSI =-------------------------------------
// Route::get('/databerita', [BeritaController::class, 'databerita'])->middleware('auth');  
// Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
// Route::get('/databerita/update/{judul}', [BeritaController::class, 'updatedataberita'])->middleware('auth')->name('updateshow.databerita');
// Route::post('/databeritaupdatestore/{judul}', [BeritaController::class, 'createupdatedataberita'])->middleware('auth')->name('update.databeritanews');
// Route::get('/databeritacreate', [BeritaController::class, 'createnewdataberita'])->middleware('auth');
// Route::post('/databeritastore', [BeritaController::class, 'createnewstoredataberita'])->middleware('auth')->name('create.databerita');

// Route::post('/databerita/{judul}', [BeritaController::class, 'deletedataberita'])
// ->middleware('auth')
// ->name('delete.databerita');

// // ======================================== PENANGGUNG JAWAB TEKNIS ====================================================================
// Route::get('/datapjt', [SkktenagakerjaController::class, 'datapjt'])->middleware('auth');  
// Route::get('/datapjt/{nama_lengkap}', [SkktenagakerjaController::class, 'datapjtshowByName'])->name('datapjt.show');
// Route::get('/datapjt/update/{nama_lengkap}', [SkktenagakerjaController::class, 'updatedatapjt'])->middleware('auth')->name('update.datapjt');
// Route::post('/datapjtupdatestore/{id}', [SkktenagakerjaController::class, 'createupdatedatapjtnew'])->middleware('auth')->name('updatestore.datapjt');
// Route::get('/datapjtcreate', [SkktenagakerjaController::class, 'createdatapjt'])->middleware('auth');
// Route::post('/datapjtstorenewdata', [SkktenagakerjaController::class, 'createstoredatapjt'])->middleware('auth')->name('create.datapjt');

// Route::post('/datapjt/{nama_lengkap}', [SkktenagakerjaController::class, 'deletedatapjt'])
// ->middleware('auth')
// ->name('delete.datapjt');






// Route::get('/$login', function () {
//     // return view('welcome');
//     return view('login.index',
//         'title' => 'Halaman Login'
//     ]);
// });

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');  
Route::get('/login', [LoginController::class, 'index']);  
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// -------------------------- TEMPLATE DASHBOARD -------------------------------------
Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');  


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
