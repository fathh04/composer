<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FeedController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'required|image|max:2048',
    ]);

    $path = $request->file('gambar')->store('feed', 'public');

    Feed::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'gambar' => $path,
    ]);

    return back()->with('success', 'Feed berhasil diposting!');
}

}
