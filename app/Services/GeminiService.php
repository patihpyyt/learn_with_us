<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;

class GeminiService
{
    protected $apiKey;
    
    protected $baseUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent';

    public function __construct()
    {
        $this->apiKey = env('GEMINI_API_KEY');
    }

    public function generateResponse(string $prompt, string $systemInstruction = '')
    {
        try {
            if (empty($this->apiKey)) {
                return 'Error: API Key Gemini belum diisi di file .env!';
            }

            $fullPrompt = $prompt;
            if (!empty($systemInstruction)) {
                $fullPrompt = "Instruksi untuk AI:\n" . $systemInstruction . "\n\nPertanyaan Pengguna:\n" . $prompt;
            }

            $payload = [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $fullPrompt]
                        ]
                    ]
                ]
            ];

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '?key=' . $this->apiKey, $payload);

            if ($response->successful()) {
                return $response->json('candidates.0.content.parts.0.text');
            }

            $errorMsg = $response->json('error.message') ?? $response->body();
            return "Error dari Google API: " . $errorMsg;

        } catch (Exception $e) {
            return 'Terjadi kesalahan sistem internal: ' . $e->getMessage();
        }
    }
}