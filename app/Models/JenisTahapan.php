<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTahapan extends Model
{
    use HasFactory;

    protected $table = 'jenis_tahapans';

    protected $fillable = [
        'nama_tahapan',
    ];

    // Relasi hasMany (memiliki banyak) dengan model TahapanKegiatan
    // Model JenisTahapan adalah parent/induk dari model TahapanKegiatan
    // Ini menunjukkan bahwa setiap JenisTahapan dapat memiliki banyak TahapanKegiatan
    public function tahapanKegiatan()
    {
        return $this->hasMany(TahapanKegiatan::class, 'jenis_tahapans_id');
    }
}
