<?php

namespace App\Http\Controllers;

use App\Models\KategoriWisata;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = KategoriWisata::all();
        return view('kategori.index', compact('kategori'));
    }
}
