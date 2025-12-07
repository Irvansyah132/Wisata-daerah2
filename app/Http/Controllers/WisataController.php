<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = TempatWisata::with(['kategori','kota'])->get();
        return view('wisata.index', compact('wisata'));
    }

    public function show($id)
    {
        $wisata = TempatWisata::with(['kategori','kota'])->findOrFail($id);
        return view('wisata.show', compact('wisata'));
    }

}
