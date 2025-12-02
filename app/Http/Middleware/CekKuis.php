<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\KuisResult;
use Illuminate\Support\Facades\Auth;

class CekKuis
{
    public function handle(Request $request, Closure $next)
    {
        $userId = Auth::id();

        $cek = KuisResult::where('pengguna_id', $userId)->first();

        if ($cek) {
            return redirect()->route('kuis.hasil')->with('result', $cek);
        }

        return $next($request);
    }
}
