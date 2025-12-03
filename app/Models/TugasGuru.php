<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasGuru extends Model
{
    protected $table = 'tugas_guru';

    protected $fillable = [
        'pengguna_id',
        'materi_id',
        'pdf_file',
        'nilai'
    ];

    public function pengguna()
    {
        return $this->belongsTo(\App\Models\pengguna::class, 'pengguna_id');
    }

    public function materi()
    {
        return $this->belongsTo(\App\Models\Materi::class, 'materi_id');
    }
}
