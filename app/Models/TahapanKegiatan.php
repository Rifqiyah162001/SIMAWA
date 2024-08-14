<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapanKegiatan extends Model
{
    use HasFactory;

    protected $table = 'tahapan_kegiatans';

    protected $fillable = [
        'buat_kegiatans_id',
        'jenis_tahapans_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'show_in_tabs',  
    ];

    // Relasi belongsTo (dimiliki oleh) dengan model BuatKegiatan
    // Model TahapanKegiatan adalah child/anak dari model BuatKegiatan
    // Ini menunjukkan bahwa setiap TahapanKegiatan berhubungan dengan satu BuatKegiatan
    public function buatKegiatan()
    {
        return $this->belongsTo(BuatKegiatan::class, 'buat_kegiatans_id');
    }

    // Relasi belongsTo (dimiliki oleh) dengan model JenisTahapan
    // Model TahapanKegiatan adalah child/anak dari model JenisTahapan
    // Ini menunjukkan bahwa setiap TahapanKegiatan berhubungan dengan satu JenisTahapan
    public function jenisTahapan()
    {
        return $this->belongsTo(JenisTahapan::class, 'jenis_tahapans_id');
    }

    public function proposals()
    {
        return $this->hasMany(PenerimaanProposal::class, 'tahapan_kegiatans_id');
    }


}
