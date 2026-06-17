<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenRouterService
{
    public function chat(string $question): string
    {
        $response = Http::timeout(60)
            ->withHeaders([
                'Authorization' => 'Bearer ' . env('OPENROUTER_API_KEY'),
                'Content-Type' => 'application/json',
                'HTTP-Referer' => config('app.url'), // Penting untuk OpenRouter
                'X-Title' => 'Asisten Dosen Kalkulus',
            ])
            ->post('https://openrouter.ai/api/v1/chat/completions', [
                'model' => 'qwen/qwen-2.5-7b-instruct',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Kamu adalah asisten dosen kalkulus. Jawab dengan jelas, ringkas, dan gunakan format LaTeX untuk semua rumus matematika.'
                    ],
                    [
                        'role' => 'user',
                        'content' => $question
                    ]
                ],
                'max_tokens' => 500
            ]);

        if ($response->failed()) {
            throw new \Exception('API Error: ' . $response->body());
        }

        return $response->json()['choices'][0]['message']['content'];
    }
}