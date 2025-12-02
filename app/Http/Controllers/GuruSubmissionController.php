<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedbackGuru;
use Illuminate\Support\Facades\Auth;

class GuruSubmissionController extends Controller
{
    public function storeFeedback(Request $request)
    {
        $request->validate([
            'pengguna_id' => 'required|integer',
            'feedback'    => 'required|string'
        ]);

        FeedbackGuru::updateOrCreate(
            [
                'pengguna_id' => $request->pengguna_id,
                'guru_id'     => Auth::id()
            ],
            [
                'feedback' => $request->feedback
            ]
        );

        return response()->json([
            'status'  => 'success',
            'message' => 'Feedback berhasil disimpan.'
        ]);
    }
}
