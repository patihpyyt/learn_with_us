<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GroqService;
use App\Models\AiCalculation;
use Illuminate\Support\Str;

class AiChatController extends Controller 
{
    public function index(Request $request) 
    {
        $chatId = $request->query('chat_id');
        $percakapanAktif = $chatId ? AiCalculation::where('chat_session_id', $chatId)->get() : collect();

        $daftarRiwayat = collect();
        if (auth()->check()) {
            $daftarRiwayat = AiCalculation::where('user_id', auth()->id())
                ->latest()
                ->get()
                ->unique('chat_session_id');
        }

        
        return view('ai', compact('percakapanAktif', 'daftarRiwayat'));
    }

    public function chat(Request $request, GroqService $ai) 
    {
        try {
            $question = $request->input('question');
            $sessionId = $request->input('chat_session_id') ?? (string) Str::uuid();

            $answer = $ai->ask($question, "Materi: Statistika");

            if (auth()->check()) {
                AiCalculation::create([
                    'user_id' => auth()->id(),
                    'chat_session_id' => $sessionId,
                    'input_data' => $question,
                    'ai_response' => $answer,
                ]);
            }

            return response()->json([
                'answer' => $answer, 
                'chat_session_id' => $sessionId,
                'input_data' => $question 
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'AI Gagal: ' . $e->getMessage()], 500);
        }
    }
}