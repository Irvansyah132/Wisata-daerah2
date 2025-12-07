<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;

class HomeController extends Controller
{
    public function index()
    {
        $wisata = TempatWisata::with(['kategori','kota'])->get();
        return view('home', compact('wisata'));
    }
}
