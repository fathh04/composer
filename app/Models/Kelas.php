<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'idkelas', 'namaKelas', 'pelajaran', 'pengampu',
    ];
    public function pengguna()
    {
        return $this->belongsToMany(Pengguna::class, 'kelas_pengguna', 'kelas_id', 'pengguna_id');
    }
    public function materi()
    {
        return $this->hasMany(Materi::class, 'idkelas');
    }

    public function kuis()
    {
        return $this->hasMany(Kuis::class, 'idkelas');
    }
}
