<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function proposalAsKetua()
    {
        return $this->hasMany(PenerimaanProposal::class, 'ketua_tim');
    }

    public function proposalAsDosenPembimbing()
    {
        return $this->hasMany(PenerimaanProposal::class, 'dosen_pembimbing');
    }

    public function proposalAsAnggota()
    {
        return $this->belongsToMany(PenerimaanProposal::class, 'proposal_members', 'penerimaan_proposals_id', 'users_id');
    }
}
