<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class GroqService {
    public function ask($question, $context) {
        $response = Http::withToken(env('GROQ_API_KEY'))
            ->post('https://api.groq.com/openai/v1/chat/completions', [
                'model' => 'llama-3.3-70b-versatile', // Pilihan model Groq
                'messages' => [
                    ['role' => 'system', 'content' => 'Lo adalah asisten kalkulus ahli. Jawab pertanyaan berdasarkan konteks ini: ' . $context],
                    ['role' => 'user', 'content' => $question]
                ]
            ]);
        return $response->json()['choices'][0]['message']['content'] ?? 'Error, AI lagi capek.';
    }
}