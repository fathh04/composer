<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idkelas');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'idpengguna');
    }
}
