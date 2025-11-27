<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    private static function apiKey()
    {
        return env('GEMINI_API_KEY');
    }

    // ================================
    // 1. GENERATE CONTENT (LLM)
    // ================================
    public static function predict(string $prompt)
    {
        $apiKey = self::apiKey();

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={$apiKey}";

        $response = Http::post($url, [
            "contents" => [
                [
                    "parts" => [
                        ["text" => $prompt]
                    ]
                ]
            ]
        ]);

        if (!$response->successful()) {
            return null;
        }

        $json = $response->json();

        // Ambil teks dari berbagai kemungkinan struktur (stabil)
        $text =
            $json['candidates'][0]['content']['parts'][0]['text']
            ?? $json['candidates'][0]['content'][0]['text']
            ?? $json['text']
            ?? "";

        return self::extractJson($text);
    }

    // ================================
    // 2. AMBIL EMBEDDING
    // ================================
    public static function embedding(string $text)
    {
        $apiKey = self::apiKey();

        $url = "https://generativelanguage.googleapis.com/v1beta/models/text-embedding-004:embedText?key={$apiKey}";

        $response = Http::post($url, [
            "text" => $text
        ]);

        if (!$response->successful()) {
            return null;
        }

        return $response->json()['embedding']['value'] ?? null;
    }

    // ================================
    // 3. EKSTRAK JSON dari teks LLM
    // ================================
    public static function extractJson($text)
    {
        // Tangkap JSON terbesar yang muncul
        preg_match('/\{(?:[^{}]|(?R))*\}/s', $text, $match);

        if (!$match) {
            return "{}";
        }

        return $match[0];
    }
}
