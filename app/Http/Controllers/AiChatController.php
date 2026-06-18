<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AiCalculation;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AiChatController extends Controller 
{
    // 1. Fungsi Index tetap sama
    public function index(Request $request) 
    {
        $riwayat = auth()->check()
            ? AiCalculation::where('user_id', auth()->id())
                ->whereNotNull('chat_session_id')
                ->latest()
                ->get()
                ->unique('chat_session_id') 
            : collect();

        $chatMasaLalu = collect();
        
        if ($request->has('chat_id')) {
            $targetChat = AiCalculation::find($request->chat_id);
            if ($targetChat) {
                session(['active_chat_session' => $targetChat->chat_session_id]);
                $chatMasaLalu = AiCalculation::where('chat_session_id', $targetChat->chat_session_id)
                                             ->orderBy('created_at', 'asc') 
                                             ->get();
            }
        }

        return view('ai', compact('riwayat', 'chatMasaLalu'));
    }

  public function prosesAI(Request $request)
{
    // UBAH: Sesuai dengan yang dikirim di JavaScript (input_data)
    $request->validate(['input_data' => 'required']); 
    
    $inputData = $request->input('input_data');
    $prompt = "Kamu adalah asisten AI untuk aplikasi e-book statistika. Tolong analisis, jawab, atau jelaskan data berikut secara ringkas dan mudah dipahami: " . $inputData;

    if (!session()->has('active_chat_session')) {
        session(['active_chat_session' => 'sess_' . Str::random(10) . '_' . time()]);
    }
    $currentSessionId = session('active_chat_session');

    try {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.groq.com/openai/v1/chat/completions', [
            'model' => 'llama-3.3-70b-versatile',
            'messages' => [['role' => 'user', 'content' => $prompt]]
        ]);

        if ($response->failed()) {
            \Log::error('Groq API Error: ' . $response->body());
            return response()->json(['error' => 'Gagal koneksi ke Groq'], 500);
        }

        $hasilAI = $response->json()['choices'][0]['message']['content'];

        AiCalculation::create([
            'user_id'         => auth()->id() ?? null,
            'chat_session_id' => $currentSessionId,
            'input_data'      => $inputData,
            'ai_prompt'       => $prompt,
            'ai_response'     => $hasilAI
        ]);

        return response()->json([
            'answer' => $hasilAI,
            'chat_session_id' => $currentSessionId
        ]);

    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
}