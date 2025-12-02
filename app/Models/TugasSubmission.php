<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasSubmission extends Model
{
    protected $table = 'tugas_submissions';
    protected $fillable = [
        'pengguna_id',
        'html_code',
        'screenshot'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
