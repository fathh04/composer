<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KontenController extends Controller
{
    public function jelajah()
    {
        return view('konten.jelajah');
    }
}
