<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class FedashboardController extends Controller
{
    //
    public function index()
    {
        $data = Beranda::all();
    
        return view('frontend.00_halamanutama.index', [
            'title' => 'Sihade | PT. Haznia Bina Virofarm',
            'databeranda' => $data,
        ]);
    }

}
