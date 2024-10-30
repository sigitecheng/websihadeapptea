<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FedashboardController extends Controller
{
    //
    public function index()
    {
        return view('frontend.00_halamanutama.index', [
            'title' => 'Sihade | PT. Haznia Bina Virofarm'
        ]);
    }

}
