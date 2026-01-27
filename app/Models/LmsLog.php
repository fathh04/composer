<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LmsLog extends Model
{
    use HasFactory;

    protected $table = 'tbl_lms_logs';

    protected $fillable = [
        'user_id',
        'login_count',
        'avg_session_time',
        'material_access',
        'forum_activity',
        'assignment_submit',
        'quiz_score'
    ];
}
