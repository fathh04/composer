<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LmsLog;
use App\Models\pengguna;

class LmsLogSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua siswa
        $users = pengguna::where('role', 'siswa')->get();

        foreach ($users as $user) {

            LmsLog::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'login_count'       => rand(1, 20),
                    'avg_session_time'  => rand(5, 60), // menit
                    'material_access'   => rand(1, 30),
                    'forum_activity'    => rand(0, 15),
                    'assignment_submit' => rand(0, 5),
                    'quiz_score'        => rand(50, 95),
                ]
            );

        }
    }
}
