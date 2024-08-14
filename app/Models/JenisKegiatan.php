<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kegiatans';

    protected $fillable = [
        'jenis_kegiatan',
        'kategori_kegiatans_id',
    ];

    // Relasi 1 to Many (satu ke banyak) antara kategoriKegiatan dan JenisKegiatan
    // Child/anak dr tabel kategori kegiatan
    // Ini menunjukkan setiap JenisKegiatan berhubungan dengan satu kategoriKegiatan
    public function KategoriKegiatan() {
        return $this->belongsTo(kategoriKegiatan::class, 'kategori_kegiatans_id');
    }

    // Relasi 1 to Many (satu ke banyak) antara JenisKegiatan dan BuatKegiatan
    // Model JenisKegiatan adalah parent/induk dari model BuatKegiatan
    // Ini menunjukkan satu JenisKegiatan dapat digunakan oleh banyak BuatKegiatan
    public function buatKegiatan()
    {
        return $this->hasMany(BuatKegiatan::class, 'jenis_kegiatans_id');
    }
}
