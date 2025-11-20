<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodeSubmission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CodeSubmissionController extends Controller
{
    public function status()
    {
        $user = Auth::user();
        if (!$user){
            return response()->json(['submitted' => false], 200);
        }
        $submission = CodeSubmission::where('user_id', $user->id)->latest()->first();
        if ($submission){
            return response()->json([
                'submitted' => true,
                'files' => $submission->files,
                'output' => $submission->output,
                'created_at' => $submission->created_at,
            ]);
        }
        return response()->json(['submitted' => false]);
    }

    public function save (Request $request)
    {
        $user = Auth::user();
        if (!$user){
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        $existing = CodeSubmission::where('user_id', $user->id)->exists();
        if($existing){
            return response()->json(['message' => 'Anda sudah mengirim kode sebelumnya'], 403);
        }
        $data = $request->all();

        $validator = Validator::make($data, [
            'files' => 'required|array',
            'files.index.html' => 'required|string',
            'files.style.css' => 'nullable|string',
            'files.script.js' => 'nullable|string',
            'output' => 'nullable|string',
        ]);
        if($validator->fails()){
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }
        $submission = CodeSubmission::create([
            'user_id' => $user->id,
            'files' => $data['files'],
            'output' => $data['output'] ?? null,
        ]);

        return response()->json(['message' => 'Saved', 'id' => $submission->id], 201);
    }
}
