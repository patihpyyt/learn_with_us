<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AiCalculation;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AiChatController extends Controller 
{
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
            // Buka percakapan LAMA yang dipilih dari riwayat
            $targetChat = AiCalculation::find($request->chat_id);
            if ($targetChat) {
                session(['active_chat_session' => $targetChat->chat_session_id]);
                $chatMasaLalu = AiCalculation::where('chat_session_id', $targetChat->chat_session_id)
                                             ->orderBy('created_at', 'asc') 
                                             ->get();
            }
        } else {
            // ✅ FIX: Tidak ada chat_id = user klik "Percakapan Baru" atau pertama kali buka /ai
            // Reset session lama, biar chat baru dapat session_id baru, bukan nyambung ke yang lama
            session()->forget('active_chat_session');
        }

        return view('ai', compact('riwayat', 'chatMasaLalu'));
    }

    public function prosesAI(Request $request)
    {
        $request->validate(['input_data' => 'required']);

        $inputData = $request->input('input_data');

        if (!session()->has('active_chat_session')) {
            session(['active_chat_session' => 'sess_' . Str::random(10) . '_' . time()]);
        }
        $currentSessionId = session('active_chat_session');

        // Ambil riwayat chat dalam sesi yang sama, urut dari paling lama ke terbaru
        $riwayatChat = AiCalculation::where('chat_session_id', $currentSessionId)
            ->orderBy('created_at', 'asc')
            ->get();

        // Susun ulang jadi array messages lengkap, gantian user & assistant
        $messages = [
            [
                'role' => 'system',
                'content' => 'Kamu adalah asisten AI untuk aplikasi e-book statistika. Jawab pertanyaan dengan ringkas dan mudah dipahami, sambil tetap mengingat konteks percakapan sebelumnya dalam sesi ini.'
            ]
        ];

        foreach ($riwayatChat as $chat) {
            $messages[] = ['role' => 'user', 'content' => $chat->input_data];
            $messages[] = ['role' => 'assistant', 'content' => $chat->ai_response];
        }

        $messages[] = ['role' => 'user', 'content' => $inputData];

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.groq.com/openai/v1/chat/completions', [
                'model' => 'llama-3.3-70b-versatile',
                'messages' => $messages
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
                'ai_prompt'       => $inputData,
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