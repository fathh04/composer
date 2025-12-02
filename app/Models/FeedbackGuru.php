<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedbackGuru extends Model
{
    protected $table = 'feedback_guru';

    protected $fillable = [
        'pengguna_id',
        'guru_id',
        'feedback'
    ];

    public function siswa()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }

    public function guru()
    {
        return $this->belongsTo(Pengguna::class, 'guru_id');
    }
}
