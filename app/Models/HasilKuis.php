<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKuis extends Model
{
    use HasFactory;
    public function kuis()
    {
        return $this->belongsTo(Kuis::class, 'idkuis');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'idpengguna');
    }
}
