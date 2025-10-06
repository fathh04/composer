<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('profile', [
                'user_name' => Auth::user()->nama,
                'email' => Auth::user()->email,
                'role' => Auth::user()->role,
            ]);
        }

        return redirect()->route('login')->withErrors(['error' => 'Anda harus login terlebih dahulu.']);
    }
}
