<?php

namespace App\Http\Controllers;

use App\Models\Aboutsihade;
use App\Models\Dataperusahaan;
use App\Models\Faq;
use App\Models\informasiperusahaan;
use App\Models\Pertanian;
use App\Models\Peternakan;
use App\Models\Plantations;
use App\Models\Testimoni;
use App\Models\Whysihade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        // $datahimbauandinas = himbauandinas::all();
        // $jumlahHimbauan = himbauandinas::count();  // Mendapatkan jumlah data
    
        $user = Auth::user();
    
        return view('backend.00_dashboard.index', [
            'title' => 'Dashboard Sihade',
            // 'user' => $user,
        ]);
    }

    // ------------ ABOUT SIHADE -------------------------------==============================================
    // ====================================================================================================
    
    
    public function aboutsihade()
    {
        
        $aboutsihade = Aboutsihade::paginate(2);
        // $user = Auth::user();

        return view('backend.01_home.01_aboutsihade.index', [
            'data' => $aboutsihade,
            // 'user' => $user,
            'title' => 'About Sihade',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedataaboutsihade($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $dataaboutsihade = Aboutsihade::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.01_home.01_aboutsihade.update', [
                            'data' => $dataaboutsihade,
                            'user' => $user,
                            'title' => 'Update About Sihade'
                        ]);
                    }
                    
                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                    public function createupdatedataaboutsihade(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string',
                            'point1' => 'required|string',
                            'point2' => 'required|string',
                            'point3' => 'required|string',
                            'point4' => 'required|string',
                            'point5' => 'required|string',
                            'point6' => 'required|string',
                            'point7' => 'required|string',
                            'point8' => 'required|string',
                            'point9' => 'required|string',
                            'keterangan' => 'required|string',
                            
                        ]);
                    
                        // Cari data ketertiban berdasarkan judul
                        $dataaboutsihade = Aboutsihade::where('id', $id)->firstOrFail();
                    
                        // Update data ketertiban dengan data dari form
                        $dataaboutsihade->update([
                            'judul' => $request->input('judul'),
                            'point1' => $request->input('point1'),
                            'point2' => $request->input('point2'),
                            'point3' => $request->input('point3'),
                            'point4' => $request->input('point4'),
                            'point5' => $request->input('point5'),
                            'point6' => $request->input('point6'),
                            'point7' => $request->input('point7'),
                            'point8' => $request->input('point8'),
                            'point9' => $request->input('point9'),
                            'keterangan' => $request->input('keterangan'),
                        ]);
                    
                        // Flash pesan session
                        session()->flash('update', 'Data About Sihade Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/aboutsihade');
                    }

                    // =====================================================

    // ------------ ABOUT SIHADE -------------------------------==============================================
    // ====================================================================================================                                    

    // ------------ WHY SIHADE -------------------------------==============================================
    // ====================================================================================================
    
    
    public function whysihade()
    {
        
        $whysihade = Whysihade::paginate(2);
        // $user = Auth::user();

        return view('backend.01_home.02_whysihade.index', [
            'data' => $whysihade,
            // 'user' => $user,
            'title' => 'Why Sihade ?',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedatawhysihade($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $datawhysihade = Whysihade::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.01_home.02_whysihade.update', [
                            'data' => $datawhysihade,
                            'user' => $user,
                            'title' => 'Update Why Sihade ?'
                        ]);
                    }
                    
                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                    public function createupdatedatawhysihade(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                           
                            'pertanyaan1' => 'required|string',
                            'jawaban1' => 'required|string',
                            
                            'pertanyaan2' => 'required|string',
                            'jawaban2' => 'required|string',
                            
                            'pertanyaan3' => 'required|string',
                            'jawaban3' => 'required|string',
                            
                            'pertanyaan4' => 'required|string',
                            'jawaban4' => 'required|string',
                            
                        ]);
                    
                        // Cari data ketertiban berdasarkan judul
                        $datawhysihade = Whysihade::where('id', $id)->firstOrFail();
                    
                        // Update data ketertiban dengan data dari form
                        $datawhysihade->update([
                            
                            'pertanyaan1' => $request->input('pertanyaan1'),
                            'jawaban1' => $request->input('jawaban1'),                            
                            'pertanyaan2' => $request->input('pertanyaan2'),
                            'jawaban2' => $request->input('jawaban2'),
                            'pertanyaan3' => $request->input('pertanyaan3'),
                            'jawaban3' => $request->input('jawaban3'),
                            'pertanyaan4' => $request->input('pertanyaan4'),
                            'jawaban4' => $request->input('jawaban4'),

                        ]);
                    
                        // Flash pesan session
                        session()->flash('update', 'Data Why Sihade Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/whysihade');
                    }

                    // =====================================================

    // ------------ WHY SIHADE -------------------------------==============================================
    // ====================================================================================================                                    

    // ------------ TESTIMONI -------------------------------==============================================
    // ====================================================================================================
    
    
    public function testimoni()
    {
        $testimoni = Testimoni::orderBy('created_at', 'desc')->paginate(8);

        // $user = Auth::user();

        return view('backend.01_home.03_testimoni.index', [
            'data' => $testimoni,
            // 'user' => $user,
            'title' => 'Testimoni',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedatatestimoni($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $datatestimoni = Testimoni::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.01_home.03_testimoni.update', [
                            'data' => $datatestimoni,
                            'user' => $user,
                            'title' => 'Update Testimoni'
                        ]);
                    }


                    public function createupdatedatatestimoni(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                            'komentar' => 'required|string',
                            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto bisa null, jika tidak diupload
                            'namalengkap' => 'required|string',
                            'jabatan' => 'required|string',
                            'perusahaan' => 'required|string',
                        ]); 
                        
                        // Cari data ketertiban berdasarkan id
                        $datatestimoni = Testimoni::findOrFail($id);
                    
                        // Simpan foto di storage dan ambil namanya
                        if ($request->hasFile('foto')) {
                            // Hapus foto lama jika ada
                            if ($datatestimoni->foto) {
                                Storage::disk('public')->delete($datatestimoni->foto);
                            }
                            
                            // Simpan foto baru
                            $fotoPath = $request->file('foto')->store('testimoni', 'public'); // Menyimpan foto di storage/app/testimoni
                        } else {
                            // Jika tidak ada foto baru, gunakan foto lama
                            $fotoPath = $datatestimoni->foto;
                        }
                    
                        // Update data ketertiban dengan data dari form
                        $datatestimoni->update([
                            'komentar' => $request->input('komentar'),
                            'foto' => $fotoPath, // Simpan path foto
                            'namalengkap' => $request->input('namalengkap'),
                            'jabatan' => $request->input('jabatan'),
                            'perusahaan' => $request->input('perusahaan'),
                        ]);
                        
                        // Flash pesan session
                        session()->flash('update', 'Data Testimoni Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/testimoni');
                    }
                    
                    // =====================================================

                    public function createnewdatatestimoni()
                    {
                        
                        $testimoni = Testimoni::all();
                        // $user = Auth::user();
                
                        return view('backend.01_home.03_testimoni.create', [
                            'data' => $testimoni,
                            // 'user' => $user,
                            'title' => 'Create Testimoni',
                           
                        ]);
                
                    }
                
                // ----------------------------------------------------------- 
    
                    public function createnewstoredatatestimoni(Request $request)
                    {
                        // Validasi input
                        $request->validate([
                            'komentar' => 'required|string',
                            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto wajib diupload
                            'namalengkap' => 'required|string',
                            'jabatan' => 'required|string',
                            'perusahaan' => 'required|string',
                        ]); 
                        
                        // Simpan foto di storage dan ambil namanya
                        $fotoPath = $request->file('foto')->store('testimoni', 'public'); // Menyimpan foto di storage/app/testimoni
                    
                        // Buat data testimoni baru dengan data dari form
                        Testimoni::create([
                            'komentar' => $request->input('komentar'),
                            'foto' => $fotoPath, // Simpan path foto
                            'namalengkap' => $request->input('namalengkap'),
                            'jabatan' => $request->input('jabatan'),
                            'perusahaan' => $request->input('perusahaan'),
                        ]);
                        
                        // Flash pesan session
                        session()->flash('create', 'Data Testimoni Berhasil Dibuat!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/testimoni');
                    }

                    public function deletedatatestimoni($id)
    {
        // Cari entri berdasarkan name
        $entry = Testimoni::where('id', $id)->first();
    
        if ($entry) {
            // Hapus file terkait jika ada
            if ($entry->foto) {
                Storage::disk('public')->delete($entry->foto);
            }
    
            // Hapus entri dari database
            Testimoni::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/testimoni');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/testimoni');
        }
    }
                

                    


    // ------------ TESTIMONI -------------------------------==============================================
    // ====================================================================================================                                    

    
    // ------------ FAQ  -------------------------------==============================================
    // ====================================================================================================
    
    
    public function FAQ()
    {
        
        $FAQ = Faq::paginate(2);
        // $user = Auth::user();

        return view('backend.01_home.04_FAQ.index', [
            'data' => $FAQ,
            // 'user' => $user,
            'title' => 'F.A.Q ?',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedataFAQ($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $datafaq = Faq::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.01_home.04_FAQ.update', [
                            'data' => $datafaq,
                            'user' => $user,
                            'title' => 'Update Data F.A.Q ?'
                        ]);
                    }
                    
                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                    public function createupdatedataFAQ(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                           
                            'pertanyaan1' => 'required|string',
                            'jawaban1' => 'required|string',
                            
                            'pertanyaan2' => 'required|string',
                            'jawaban2' => 'required|string',
                            
                            'pertanyaan3' => 'required|string',
                            'jawaban3' => 'required|string',
                            
                            'pertanyaan4' => 'required|string',
                            'jawaban4' => 'required|string',
                            
                            'pertanyaan5' => 'required|string',
                            'jawaban5' => 'required|string',
                            
                        ]);
                    
                        // Cari data ketertiban berdasarkan judul
                        $datafaq = Faq::where('id', $id)->firstOrFail();
                    
                        // Update data ketertiban dengan data dari form
                        $datafaq->update([
                            
                            'pertanyaan1' => $request->input('pertanyaan1'),
                            'jawaban1' => $request->input('jawaban1'),                            
                            'pertanyaan2' => $request->input('pertanyaan2'),
                            'jawaban2' => $request->input('jawaban2'),
                            'pertanyaan3' => $request->input('pertanyaan3'),
                            'jawaban3' => $request->input('jawaban3'),
                            'pertanyaan4' => $request->input('pertanyaan4'),
                            'jawaban4' => $request->input('jawaban4'),
                            'pertanyaan5' => $request->input('pertanyaan5'),
                            'jawaban5' => $request->input('jawaban5'),

                        ]);
                    
                        // Flash pesan session
                        session()->flash('update', 'Data F.A.Q Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/FAQ');
                    }

                    // =====================================================

    // ------------ FAQ  -------------------------------==============================================
    // ====================================================================================================                                    

    
    // ------------ WHY SIHADE -------------------------------==============================================
    // ====================================================================================================
    
    
    public function contactus()
    {
        
        $contactus = informasiperusahaan::paginate(1);
        // $user = Auth::user();

        return view('backend.01_home.05_contactus.index', [
            'data' => $contactus,
            // 'user' => $user,
            'title' => 'Contact Us ?',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedatacontactus($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $contactus = informasiperusahaan::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.01_home.05_contactus.update', [
                            'data' => $contactus,
                            'user' => $user,
                            'title' => 'Update Contact Us ?'
                        ]);
                    }
                    
                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                    public function createupdatedatacontactus(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                            'alamat' => 'required|string',
                            'telepon1' => 'required|string',
                            'telepon2' => 'required|string',
                            'email1' => 'required|string',
                            'email2' => 'required|string',
                            'jamkerjamulai' => 'required|string',
                            'jamkerjaselesai' => 'required|string',
                        ]);
                    
                        // Cari data ketertiban berdasarkan judul
                        $contactus = informasiperusahaan::where('id', $id)->firstOrFail();
                    
                        // Update data ketertiban dengan data dari form
                        $contactus->update([
                            
                            'alamat' => $request->input('alamat'),
                            'telepon1' => $request->input('telepon1'),
                            'telepon2' => $request->input('telepon2'),
                            'email1' => $request->input('email1'),
                            'email2' => $request->input('email2'),
                            'jamkerjamulai' => $request->input('jamkerjamulai'),
                            'jamkerjaselesai' => $request->input('jamkerjaselesai'),
                           
                        ]);
                    
                        // Flash pesan session
                        session()->flash('update', 'Data Why Sihade Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/contactus');
                    }

                    // =====================================================

    // ------------ WHY SIHADE -------------------------------==============================================
    // ====================================================================================================                                    


    
    // ------------ FAQ  -------------------------------==============================================
    // ====================================================================================================
    
    
    public function company()
    {
        
        $dataperusahaan = Dataperusahaan::paginate(5);
        // $user = Auth::user();

        return view('backend.02_company.01_dataperusahaan.index', [
            'data' => $dataperusahaan,
            // 'user' => $user,
            'title' => 'Data Company ?',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedatacompany($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $datacompany = Dataperusahaan::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.02_company.01_dataperusahaan.update', [
                            'data' => $datacompany,
                            'user' => $user,
                            'title' => 'Update Data Company ?'
                        ]);
                    }
                    
                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                    public function createupdatedatacompany(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                           
                            'namaperusahaan' => 'required|string',
                            'kota' => 'required|string',
                            'provinsi' => 'required|string',
                            'negara' => 'required|string',
                            'namaruangproduksi' => 'required|string',
                            'jumlahkaryawan' => 'required|string',
                            'kapasitasproduksi' => 'required|string',
                            'keteranganperalatan' => 'required|string',
                            'kualitas' => 'required|string',
                            
                        ]);
                    
                        // Cari data ketertiban berdasarkan judul
                        $datacompany = Dataperusahaan::where('id', $id)->firstOrFail();
                    
                        // Update data ketertiban dengan data dari form
                        $datacompany->update([
                            
                            'namaperusahaan' => $request->input('namaperusahaan'),
                            'kota' => $request->input('kota'),
                            'provinsi' => $request->input('provinsi'),
                            'negara' => $request->input('negara'),
                            'namaruangproduksi' => $request->input('namaruangproduksi'),
                            'jumlahkaryawan' => $request->input('jumlahkaryawan'),
                            'kapasitasproduksi' => $request->input('kapasitasproduksi'),
                            'keteranganperalatan' => $request->input('keteranganperalatan'),
                            'kualitas' => $request->input('kualitas'),
                            
                        ]);
                    
                        // Flash pesan session
                        session()->flash('update', 'Data Perusahaan Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/company');
                    }

                    // =====================================================

    // ------------ FAQ  -------------------------------==============================================
    // ====================================================================================================                                    
    // ------------ FAQ  -------------------------------==============================================
    
                    // =====================================================

                    public function createnewdatacompany()
                    {
                        
                        $dataperusahaan = Dataperusahaan::all();
                        // $user = Auth::user();
                
                        return view('backend.02_company.01_dataperusahaan.create', [
                            'data' => $dataperusahaan,
                            // 'user' => $user,
                            'title' => 'Create Data Perusahaan',
                           
                        ]);
                
                    }
                
                // ----------------------------------------------------------- 
                public function createnewstoredatacompany(Request $request)
                {
                    // Validasi input
                    $request->validate([
                        'namaperusahaan' => 'required|string',
                        'kota' => 'required|string',
                        'provinsi' => 'required|string',
                        'negara' => 'required|string',
                        'namaruangproduksi' => 'required|string',
                        'jumlahkaryawan' => 'required|integer',
                        'kapasitasproduksi' => 'required|integer',
                        'keteranganperalatan' => 'required|string',
                        'kualitas' => 'required|string',
                    ]); 
                    
                    // Buat data perusahaan baru dengan data dari form
                    Dataperusahaan::create([
                        'namaperusahaan' => $request->input('namaperusahaan'), // Perbaiki di sini
                        'kota' => $request->input('kota'),
                        'provinsi' => $request->input('provinsi'),
                        'negara' => $request->input('negara'),
                        'namaruangproduksi' => $request->input('namaruangproduksi'),
                        'jumlahkaryawan' => $request->input('jumlahkaryawan'),
                        'kapasitasproduksi' => $request->input('kapasitasproduksi'),
                        'keteranganperalatan' => $request->input('keteranganperalatan'),
                        'kualitas' => $request->input('kualitas'),
                    ]);
                    
                    // Flash pesan session
                    session()->flash('create', 'Data Company Berhasil Dibuat!');
                
                    // Redirect ke halaman yang sesuai
                    return redirect('/company');
                }


                public function deletedatacompany($id)
                {
                    // Cari entri berdasarkan ID
                    $entry = Dataperusahaan::find($id);
                    
                    if ($entry) {
                        // Hapus entri dari database
                        $entry->delete();
                        
                        // Set pesan flash untuk sukses
                        session()->flash('delete', 'Data Berhasil Dihapus!');
                        
                        // Redirect ke halaman yang sesuai
                        return redirect('/company'); // Pastikan untuk mengarahkan ke rute yang benar
                    } else {
                        // Set pesan flash jika data tidak ditemukan
                        session()->flash('error', 'Data Tidak Ditemukan!');
                        
                        // Redirect ke halaman yang sesuai
                        return redirect('/company'); // Pastikan untuk mengarahkan ke rute yang benar
                    }
                }
                
                
    // ====================================================================================================                                    
    // ------------ FAQ  -------------------------------==============================================
    // ====================================================================================================                                    


    
    // ------------ BE PERTANIAN  -------------------------------==============================================
    // ====================================================================================================
    
    
    public function bepertanian()
    {
        $pertanian = Pertanian::orderBy('created_at', 'desc')->paginate(3);

        // $user = Auth::user();

        return view('backend.03_produk.01_pertanian.index', [
            'data' => $pertanian,
            // 'user' => $user,
            'title' => 'Agriculture Products',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedatabepertanian($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $pertanian = Pertanian::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.03_produk.01_pertanian.update', [
                            'data' => $pertanian,
                            'user' => $user,
                            'title' => 'Update Agriculture Products'
                        ]);
                    }


                    public function createupdatedatabepertanian(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                            'namaproduk' => 'required|string',
                            'gambarproduk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto bisa null, jika tidak diupload
                            'keterangan' => 'required|string',
                            'tanggalupload' => 'required|date',
                        ]); 
                        
                        // Cari data ketertiban berdasarkan id
                        $pertanian = Pertanian::findOrFail($id);
                    
                        // Simpan foto di storage dan ambil namanya
                        if ($request->hasFile('gambarproduk')) {
                            // Hapus foto lama jika ada
                            if ($pertanian->gambarproduk) {
                                Storage::disk('public')->delete($pertanian->gambarproduk);
                            }
                            
                            // Simpan foto baru
                            $fotoPath = $request->file('gambarproduk')->store('produk/pertanian', 'public'); // Menyimpan foto di storage/app/testimoni
                        } else {
                            // Jika tidak ada foto baru, gunakan foto lama
                            $fotoPath = $pertanian->gambarproduk;
                        }
                    
                        // Update data ketertiban dengan data dari form
                        $pertanian->update([
                            'namaproduk' => $request->input('namaproduk'),
                            'gambarproduk' => $fotoPath, // Simpan path foto
                            'keterangan' => $request->input('keterangan'),
                            'tanggalupload' => $request->input('tanggalupload'),
                            
                        ]);
                        
                        // Flash pesan session
                        session()->flash('update', 'Data Agriculture Products Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/bepertanian');
                    }
                    
                    // =====================================================

                    public function createnewdatabepertanian()
                    {
                        
                        $pertanian = Pertanian::all();
                        // $user = Auth::user();
                
                        return view('backend.03_produk.01_pertanian.create', [
                            'data' => $pertanian,
                            // 'user' => $user,
                            'title' => 'Create Agriculture Products',
                           
                        ]);
                
                    }
                
                // ----------------------------------------------------------- 
    
                    public function createnewstoredatabepertanian(Request $request)
                    {
                        // Validasi input
                        $request->validate([
                            'namaproduk' => 'required|string',
                            'gambarproduk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto wajib diupload
                            'keterangan' => 'required|string',
                            'tanggalupload' => 'required|date',
                            // 'perusahaan' => 'required|string',
                        ]); 
                        
                        // Simpan foto di storage dan ambil namanya
                        $fotoPath = $request->file('gambarproduk')->store('produk/pertanian', 'public'); // Menyimpan foto di storage/app/testimoni
                    
                        // Buat data testimoni baru dengan data dari form
                        Pertanian::create([
                            'namaproduk' => $request->input('namaproduk'),
                            'gambarproduk' => $fotoPath, // Simpan path foto
                            'keterangan' => $request->input('keterangan'),
                            'tanggalupload' => $request->input('tanggalupload'),
                            // 'perusahaan' => $request->input('perusahaan'),
                        ]);
                        
                        // Flash pesan session
                        session()->flash('create', 'Data Agriculture Products Berhasil Dibuat!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/bepertanian');
                    }

                    public function deletedatabepertanian($id)
    {
        // Cari entri berdasarkan name
        $entry = Pertanian::where('id', $id)->first();
    
        if ($entry) {
            // Hapus file terkait jika ada
            if ($entry->gambarproduk) {
                Storage::disk('public')->delete($entry->gambarproduk);
            }
    
            // Hapus entri dari database
            Pertanian::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/bepertanian');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/bepertanian');
        }
    }
                

                    


    // ------------ BACKEND DATA PERTANIAN -------------------------------==============================================
    // ====================================================================================================                                    

    
    // ------------ BE PERTEERNAKAN   -------------------------------==============================================
    // ====================================================================================================
    
    
    public function beperternakan()
    {
        $peternakan = Peternakan::orderBy('created_at', 'desc')->paginate(3);

        // $user = Auth::user();

        return view('backend.03_produk.02_peternakan.index', [
            'data' => $peternakan,
            // 'user' => $user,
            'title' => 'Animal Farming Products',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedatabeperternakan($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $peternakan = Peternakan::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.03_produk.02_peternakan.update', [
                            'data' => $peternakan,
                            'user' => $user,
                            'title' => 'Update Animal Farming Products'
                        ]);
                    }


                    public function createupdatedatabeperternakan(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                            'namaproduk' => 'required|string',
                            'gambarproduk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto bisa null, jika tidak diupload
                            'keterangan' => 'required|string',
                            'tanggalupload' => 'required|date',
                        ]); 
                        
                        // Cari data ketertiban berdasarkan id
                        $peternakan = Peternakan::findOrFail($id);
                    
                        // Simpan foto di storage dan ambil namanya
                        if ($request->hasFile('gambarproduk')) {
                            // Hapus foto lama jika ada
                            if ($peternakan->gambarproduk) {
                                Storage::disk('public')->delete($peternakan->gambarproduk);
                            }
                            
                            // Simpan foto baru
                            $fotoPath = $request->file('gambarproduk')->store('produk/peternakan', 'public'); // Menyimpan foto di storage/app/testimoni
                        } else {
                            // Jika tidak ada foto baru, gunakan foto lama
                            $fotoPath = $peternakan->gambarproduk;
                        }
                    
                        // Update data ketertiban dengan data dari form
                        $peternakan->update([
                            'namaproduk' => $request->input('namaproduk'),
                            'gambarproduk' => $fotoPath, // Simpan path foto
                            'keterangan' => $request->input('keterangan'),
                            'tanggalupload' => $request->input('tanggalupload'),
                            
                        ]);
                        
                        // Flash pesan session
                        session()->flash('update', 'Data Animal Farming Products Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/beperternakan');
                    }
                    
                    // =====================================================

                    public function createnewdatabeperternakan()
                    {
                        
                        $peternakan = Peternakan::all();
                        // $user = Auth::user();
                
                        return view('backend.03_produk.02_perternakan.create', [
                            'data' => $peternakan,
                            // 'user' => $user,
                            'title' => 'Create Animal Farming Products',
                           
                        ]);
                
                    }
                
                // ----------------------------------------------------------- 
    
                    public function createnewstoredatabeperternakan(Request $request)
                    {
                        // Validasi input
                        $request->validate([
                            'namaproduk' => 'required|string',
                            'gambarproduk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto wajib diupload
                            'keterangan' => 'required|string',
                            'tanggalupload' => 'required|date',
                            // 'perusahaan' => 'required|string',
                        ]); 
                        
                        // Simpan foto di storage dan ambil namanya
                        $fotoPath = $request->file('gambarproduk')->store('produk/peternakan', 'public'); // Menyimpan foto di storage/app/testimoni
                    
                        // Buat data testimoni baru dengan data dari form
                        Peternakan::create([
                            'namaproduk' => $request->input('namaproduk'),
                            'gambarproduk' => $fotoPath, // Simpan path foto
                            'keterangan' => $request->input('keterangan'),
                            'tanggalupload' => $request->input('tanggalupload'),
                            // 'perusahaan' => $request->input('perusahaan'),
                        ]);
                        
                        // Flash pesan session
                        session()->flash('create', 'Data Agriculture Products Berhasil Dibuat!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/beperternakan');
                    }

                    public function deletedatabeperternakan($id)

                    {
        // Cari entri berdasarkan name
        $entry = Peternakan::where('id', $id)->first();
    
        if ($entry) {
            // Hapus file terkait jika ada
            if ($entry->gambarproduk) {
                Storage::disk('public')->delete($entry->gambarproduk);
            }
    
            // Hapus entri dari database
            Peternakan::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/beperternakan');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/beperternakan');
        }
    }
                

                    


    // ------------ BACKEND DATA PERTANIAN -------------------------------==============================================
    // ====================================================================================================                                    

    
    // ------------ BACKEND DATA perkebunan   -------------------------------==============================================
    // ====================================================================================================
    
    
    public function beperkebunan()
    {
        $perkebunan = Plantations::orderBy('created_at', 'desc')->paginate(3);

        // $user = Auth::user();

        return view('backend.03_produk.03_perkebunan.index', [
            'data' => $perkebunan,
            // 'user' => $user,
            'title' => 'Plantations Products',
           
        ]);

    }


    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatedatabeperkebunan($id)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $perkebunan = Plantations::where('id', $id)->firstOrFail();
                        $user = Auth::user();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.03_produk.03_perkebunan.update', [
                            'data' => $perkebunan,
                            'user' => $user,
                            'title' => 'Update Plantations Products'
                        ]);
                    }


                    public function createupdatedatabeperkebunan(Request $request, $id)
                    {
                        // Validasi input
                        $request->validate([
                            'namaproduk' => 'required|string',
                            'gambarproduk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto bisa null, jika tidak diupload
                            'keterangan' => 'required|string',
                            'tanggalupload' => 'required|date',
                        ]); 
                        
                        // Cari data ketertiban berdasarkan id
                        $perkebunan = Plantations::findOrFail($id);
                    
                        // Simpan foto di storage dan ambil namanya
                        if ($request->hasFile('gambarproduk')) {
                            // Hapus foto lama jika ada
                            if ($perkebunan->gambarproduk) {
                                Storage::disk('public')->delete($perkebunan->gambarproduk);
                            }
                            
                            // Simpan foto baru
                            $fotoPath = $request->file('gambarproduk')->store('produk/perkebunan', 'public'); // Menyimpan foto di storage/app/testimoni
                        } else {
                            // Jika tidak ada foto baru, gunakan foto lama
                            $fotoPath = $perkebunan->gambarproduk;
                        }
                    
                        // Update data ketertiban dengan data dari form
                        $perkebunan->update([
                            'namaproduk' => $request->input('namaproduk'),
                            'gambarproduk' => $fotoPath, // Simpan path foto
                            'keterangan' => $request->input('keterangan'),
                            'tanggalupload' => $request->input('tanggalupload'),
                            
                        ]);
                        
                        // Flash pesan session
                        session()->flash('update', 'Data Plantations Products Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/beperkebunan');
                    }
                    
                    // =====================================================

                    public function createnewdatabeperkebunan()
                    {
                        
                        $perkebunan = Plantations::all();
                        // $user = Auth::user();
                
                        return view('backend.03_produk.03_perkebunan.create', [
                            'data' => $perkebunan,
                            // 'user' => $user,
                            'title' => 'Create Plantations Products',
                           
                        ]);
                
                    }
                
                // ----------------------------------------------------------- 
    
                    public function createnewstoredatabeperkebunan(Request $request)
                    {
                        // Validasi input
                        $request->validate([
                            'namaproduk' => 'required|string',
                            'gambarproduk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto wajib diupload
                            'keterangan' => 'required|string',
                            'tanggalupload' => 'required|date',
                            // 'perusahaan' => 'required|string',
                        ]); 
                        
                        // Simpan foto di storage dan ambil namanya
                        $fotoPath = $request->file('gambarproduk')->store('produk/perkebunan', 'public'); // Menyimpan foto di storage/app/testimoni
                    
                        // Buat data testimoni baru dengan data dari form
                        Plantations::create([
                            'namaproduk' => $request->input('namaproduk'),
                            'gambarproduk' => $fotoPath, // Simpan path foto
                            'keterangan' => $request->input('keterangan'),
                            'tanggalupload' => $request->input('tanggalupload'),
                            // 'perusahaan' => $request->input('perusahaan'),
                        ]);
                        
                        // Flash pesan session
                        session()->flash('create', 'Data Plantations Products Berhasil Dibuat!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/beperkebunan');
                    }

                    public function deletedatabeperkebunan($id)

                    {
        // Cari entri berdasarkan name
        $entry = Plantations::where('id', $id)->first();
    
        if ($entry) {
            // Hapus file terkait jika ada
            if ($entry->gambarproduk) {
                Storage::disk('public')->delete($entry->gambarproduk);
            }
    
            // Hapus entri dari database
            Plantations::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/beperkebunan');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/beperkebunan');
        }
    }
                

                    


    // ------------ BACKEND DATA PERTANIAN -------------------------------==============================================
    // ====================================================================================================                                    


}
