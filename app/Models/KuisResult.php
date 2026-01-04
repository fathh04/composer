<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KuisResult extends Model
{
    protected $table = "kuis_results";

    protected $fillable = [
        'pengguna_id',
        'posttest',
        'score',
    ];
}
