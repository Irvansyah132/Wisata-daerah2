<?php

namespace App\Http\Controllers;

use App\Models\KategoriWisata;

class KategoriController extends Controller
{
    public function index()
    
        $query = TempatWisata::with(['kategori', 'kota']);

    if (request('kategori')) {
        $query->where('kategori_id', request('kategori'));
    }

    $wisata = $query->get();
    return view('wisata.index', compact('wisata'));


}
