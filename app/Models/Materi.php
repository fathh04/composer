<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table ='materi';
    protected $fillable = [
        'judul',     
        'deskripsi',
        'file_materi',
        'idkelas',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idkelas');
    }
}
