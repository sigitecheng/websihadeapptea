<?php

namespace App\Http\Controllers;

use App\Models\Aboutsihade;
use App\Models\Beranda;
use App\Models\Berkas;
use App\Models\Contactus;
use App\Models\Dataperusahaan;
use App\Models\Faq;
use App\Models\Informasiperusahaan;
use App\Models\Partners;
use App\Models\Pertanian;
use App\Models\Pertanyaanusers;
use App\Models\Peternakan;
use App\Models\Plantations;
use App\Models\Testimoni;
use App\Models\Whysihade;
use Illuminate\Http\Request;

class FedashboardController extends Controller
{
    //
    public function index()
    {
        $data = Beranda::all();
        $databerkas = Berkas::all();
        $dataaboutsihade = Aboutsihade::all();
        $datawhysihade = Whysihade::all();
        $datatestimoni = Testimoni::all();
        $datafaq = Faq::all();
        $datainformasiperusahaan = Informasiperusahaan::all();

        $databrosur = Berkas::select('brosur')->get(); // Ambil hanya kolom brosur
        $datadaftarmerk = Berkas::select('daftarmerk')->get(); // Ambil hanya kolom brosur
        $datanib = Berkas::select('nib')->get(); // Ambil hanya kolom brosur
        $datasuratsihade = Berkas::select('suratsihade')->get(); // Ambil hanya kolom brosur

    
        return view('frontend.00_dashboardusers.index', [
            'title' => 'Sihade | PT. Haznia Bina Virofarm',
            'databeranda' => $data,
            'databerkas' => $databerkas,
            'databrosur' => $databrosur,
            'datadaftarmerk' => $datadaftarmerk, 
            'datanib' => $datanib, 
            'datansuratsihade' => $datasuratsihade, 
            'dataaboutsihade' => $dataaboutsihade, 
            'datawhysihade' => $datawhysihade, 
            'datatestimoni' => $datatestimoni, 
            'datafaq' => $datafaq,
            'datainformasiperusahaan' => $datainformasiperusahaan 
        ]);
    }

    public function perusahaan()
    {
        $datacompany = Dataperusahaan::all();

        
        return view('frontend.00_dashboardusers.perusahaan.index', [
            'title' => 'Perusahaan Kami',
            'data' => $datacompany,
            
        ]);
    }

    public function perusahaandetails()
    {
        
        return view('frontend.00_dashboardusers.perusahaan.details', [
            'title' => 'Perusahaan Details',
            
        ]);
    }

    public function job()
    {
        // $datacompany = Dataperusahaan::all();

        
        return view('frontend.index', [
            'title' => 'JOB',
            // 'data' => $datacompany,
            
        ]);
    }


    public function mitrakami()
    {
        $datapartners = Partners::all();
        
        return view('frontend.00_dashboardusers.mitrakami.index', [
            'title' => 'Mitra Kami',
            'data' => $datapartners,

            
        ]);
    }

    public function pertanyaan()
    {
        $datapertanyaan = Faq::all();
        
        return view('frontend.00_dashboardusers.pertanyaan.index', [
            'title' => 'F.A.Q Sihade',
            'data' => $datapertanyaan,
            
        ]);
    }

    public function kontak()
    {
        $datakontak = Informasiperusahaan::all();
        
        return view('frontend.00_dashboardusers.kontak.index', [
            'title' => 'Contact Sihade',
            'data' => $datakontak,
            
        ]);
    }

    public function pertanian()
    {
        $datapertanian = Pertanian::all();
        
        return view('frontend.00_dashboardusers.pertanian.index', [
            'title' => 'Agricultural Products',
            'data' => $datapertanian,
            
        ]);
    }

    public function pertaniandetails($namaproduk)
    {
        $datapertanian = Pertanian::where('namaproduk', $namaproduk)->firstOrFail();
        
        return view('frontend.00_dashboardusers.pertanian.details', [
            'data' => $datapertanian,
            'title' => 'Details Agriculture Products',
        ]);
    }

    public function peternakan()
    {
        $datapeternakan = Peternakan::all();
        
        return view('frontend.00_dashboardusers.peternakan.index', [
            'title' => 'Animal Farming Products',
            'data' => $datapeternakan,
            
        ]);
    }

    public function peternakandetails($namaproduk)
    {
        $datapeternakan = Peternakan::where('namaproduk', $namaproduk)->firstOrFail();
        
        return view('frontend.00_dashboardusers.peternakan.details', [
            'data' => $datapeternakan,
            'title' => 'Details Animal Farming Products',
        ]);
    }

    public function perkebunan()
    {
        $dataperkebunan = Plantations::all();
        
        return view('frontend.00_dashboardusers.perkebunan.index', [
            'title' => 'Plantations',
            'data' => $dataperkebunan,
            
        ]);
    }

    public function perkebunandetails($namaproduk)
    {
        $dataperkebunan = Plantations::where('namaproduk', $namaproduk)->firstOrFail();
        
        return view('frontend.00_dashboardusers.perkebunan.details', [
            'data' => $dataperkebunan,
            'title' => 'Details Sihade Booster Buah Products',
        ]);
    }

    public function createnewstoredatapertanyaanusers(Request $request)
    {
        // Validate input
        $request->validate([
            'namalengkap' => 'required|string',
            'email' => 'required|string', // Validate as a proper email format
            'pertanyaan' => 'required|string', // Added max length for validation
            'telepon' => 'required|string', // Regex for validating phone number
            'pesan' => 'required|string', // Added max length for validation
        ]);
    
        // Create a new entry in the database
        Pertanyaanusers::create([
            'namalengkap' => $request->input('namalengkap'),
            'email' => $request->input('email'),
            'pertanyaan' => $request->input('pertanyaan'),
            'telepon' => $request->input('telepon'),
            'pesan' => $request->input('pesan'),
        ]);
    
        session()->flash('pertanyaan', 'Pertanyaan Berhasil Dikirim!');
    
        // Redirect to the desired route
        return redirect('/'); // Adjust this to your desired route
    }
    
}
