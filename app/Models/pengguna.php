<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $fillable = [
        'email',
        'password',
        'role',
        'gaya_belajar',
        'alasan',
        'rekomendasi',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_pengguna', 'pengguna_id', 'kelas_id');
    }
}
