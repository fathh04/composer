<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'active_classes' => 3,
            'completed_materials' => 15,
            'learning_progress' => '85%',
            'ranking' => '#1',
        ];

        return view('siswa.beranda', compact('stats'));
    }
}
