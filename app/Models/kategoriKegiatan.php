<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriKegiatan extends Model
{
    use HasFactory;

    protected $table = 'kategori_kegiatans';

    protected $fillable = [
        'nama_kategori',
    ];

    // relasi 1 to many antara kategori kegiatan dan jenis kegiatan
    // induk (parent) yang memiliki banyak anak (child) berupa jenis kegiatan
    public function jenisKegiatan() {
        return $this->hasMany(JenisKegiatan::class, 'kategori_kegiatans_id');
    }
}
