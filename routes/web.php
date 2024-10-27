<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DatajakonController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\GiskbbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\SkktenagakerjaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UijkController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SettingmenuController;
use App\Http\Controllers\UndangundangController;
use Database\Factories\DatajakonFactory;
use Database\Factories\SkktenagakerjaFactory;
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


Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');  

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');  
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
