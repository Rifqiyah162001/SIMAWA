<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListBeasiswa extends Model
{
    use HasFactory;

    protected $table = 'list_beasiswas';

    protected $fillable = [
        'kode_beasiswa',
        'nama_beasiswa',
    ];
}
