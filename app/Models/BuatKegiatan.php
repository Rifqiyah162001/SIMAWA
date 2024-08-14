<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuatKegiatan extends Model
{
    use HasFactory;

    protected $table = 'buat_kegiatans';

    protected $fillable = [
        'jenis_kegiatans_id',
        'tahun',
        'waktu_mulai_pelaksanaan',
        'waktu_akhir_pelaksanaan',
    ];

    // Relasi 1 to Many dengan model antara JenisKegiatan dan BuatKegiatan
    // Model BuatKegiatan adalah child/anak dari model JenisKegiatan
    // Ini menunjukkan bahwa setiap BuatKegiatan berhubungan dengan satu JenisKegiatan
    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class, 'jenis_kegiatans_id');
    }

    // Relasi hasMany (memiliki banyak) dengan model TahapanKegiatan
    // Model BuatKegiatan adalah parent/induk dari model TahapanKegiatan
    // Ini menunjukkan bahwa setiap BuatKegiatan dapat memiliki banyak TahapanKegiatan
    public function tahapanKegiatan()
    {
        return $this->hasMany(TahapanKegiatan::class, 'buat_kegiatans_id');
    }

    public function proposals()
    {
        return $this->hasMany(PenerimaanProposal::class, 'buat_kegiatans_id');
    }

}
