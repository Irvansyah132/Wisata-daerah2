<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\KategoriWisata;
use App\Models\Kota;

class TempatWisata extends Model
{
    use HasFactory;

    protected $table = 'tempat_wisata';

    protected $fillable = [
        'nama_tempat',
        'deskripsi',
        'kategori_id',
        'kota_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriWisata::class, 'kategori_id');
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_id');
    }
    
}
