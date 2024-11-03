<?php

namespace App\Http\Controllers;

use App\Models\Aboutsihade;
use App\Models\Faq;
use App\Models\informasiperusahaan;
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


}
