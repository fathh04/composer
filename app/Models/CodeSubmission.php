<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CodeSubmission extends Model
{
    protected $fillable = ['user_id', 'files', 'output'];

    protected $casts = [
        'files' => 'array',
    ];

   public function user()
    {
        return $this->belongsTo(\App\Models\pengguna::class, 'user_id', 'id');
    }
}
