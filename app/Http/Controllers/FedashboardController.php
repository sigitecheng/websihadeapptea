<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FedashboardController extends Controller
{
    //
    public function index()
    {
        return view('backend.00_dashboard.index', [
            'title' => 'Ini Adalah Halaman Dashboard'
        ]);
    }

}
