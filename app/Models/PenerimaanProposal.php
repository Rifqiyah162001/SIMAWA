<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanProposal extends Model
{
    use HasFactory;

    protected $table = 'penerimaan_proposals';

    protected $fillable = [
        'buat_kegiatans_id',
        'tahapan_kegiatans_id',
        'judul_proposal',
        'kategori_usaha',
        'ketua_tim',
        'nomor_hp_ketua',
        'email_ketua',
        'dosen_pembimbing',
        'proposal_path',
        'status_pengajuan',
    ];

    public function ketuaTim() 
    {
        return $this->belongsTo(User::class, 'ketua_tim');
    }

    public function dosenPembimbing() 
    {
        return $this->belongsTo(User::class, 'dosen_pembimbing');
    }

    public function buatKegiatan() 
    {
        return $this->belongsTo(BuatKegiatan::class, 'buat_kegiatans_id');
    }

    public function tahapanKegiatan() 
    {
        return $this->belongsTo(TahapanKegiatan::class, 'tahapan_kegiatans_id');
    }

    public function anggotaTim()
    {
        return $this->belongsToMany(User::class, 'proposal_members', 'penerimaan_proposals_id', 'users_id');
    }
}

