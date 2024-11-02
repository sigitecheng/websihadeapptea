<?php

namespace App\Http\Controllers;

use App\Models\Aboutsihade;
use App\Models\Beranda;
use App\Models\Berkas;
use Illuminate\Http\Request;

class FedashboardController extends Controller
{
    //
    public function index()
    {
        $data = Beranda::all();
        $databerkas = Berkas::all();
        $dataaboutsihade = Aboutsihade::all();

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
            'dataaboutsihade' => $dataaboutsihade 
        ]);
    }

    public function perusahaan()
    {
        
        return view('frontend.00_dashboardusers.perusahaan.index', [
            'title' => 'Perusahaan Kami',
            
        ]);
    }

    public function perusahaandetails()
    {
        
        return view('frontend.00_dashboardusers.perusahaan.details', [
            'title' => 'Perusahaan Details',
            
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
        
        return view('frontend.00_dashboardusers.pertanian.index', [
            'title' => 'Agricultural Products',
            
        ]);
    }

    public function pertaniandetails()
    {
        
        return view('frontend.00_dashboardusers.pertanian.details', [
            'title' => 'Agricultural Products',
            
        ]);
    }
    

}
