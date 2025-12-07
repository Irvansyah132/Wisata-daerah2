<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\WisataController;

// Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Kategori Wisata
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

// Kota
Route::get('/kota', [KotaController::class, 'index'])->name('kota.index');

// Tempat Wisata
Route::get('/wisata', [WisataController::class, 'index'])->name('wisata.index');
Route::get('/wisata/{id}', [WisataController::class, 'show'])->name('wisata.show');

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/', function () {
    return view('home');
});
