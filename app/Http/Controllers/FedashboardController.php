<?php

namespace App\Http\Controllers;

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
            'datansuratsihade' => $datasuratsihade 
        ]);
    }

}
