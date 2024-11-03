<?php

namespace App\Http\Controllers;

use App\Models\Aboutsihade;
use App\Models\Beranda;
use App\Models\Berkas;
use App\Models\Dataperusahaan;
use App\Models\Faq;
use App\Models\Informasiperusahaan;
use App\Models\Pertanian;
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
        
        return view('frontend.00_dashboardusers.mitrakami.index', [
            'title' => 'Mitra Kami',
            
        ]);
    }

    public function pertanyaan()
    {
        
        return view('frontend.00_dashboardusers.pertanyaan.index', [
            'title' => 'F.A.Q Sihade',
            
        ]);
    }

    public function kontak()
    {
        
        return view('frontend.00_dashboardusers.kontak.index', [
            'title' => 'Contact Sihade',
            
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


}
