<?php

namespace App\Http\Controllers;

use App\Models\Kota;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::all();
        return view('kota.index', compact('kota'));
    }
}
