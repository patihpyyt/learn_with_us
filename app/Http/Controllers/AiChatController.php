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
            $targetChat = AiCalculation::find($request->chat_id);
            if ($targetChat) {
                
                session(['active_chat_session' => $targetChat->chat_session_id]);
                
               
                $chatMasaLalu = AiCalculation::where('chat_session_id', $targetChat->chat_session_id)
                                             ->orderBy('created_at', 'asc') 
                                             ->get();
            }
        } 
        else {
      
            session()->forget('active_chat_session');
        }

        return view('ai', compact('riwayat', 'chatMasaLalu'));
    }

    public function prosesAI(Request $request)
    {
        $request->validate(['angka_kalkulator' => 'required']);
        $inputData = $request->input('angka_kalkulator');
        $prompt = "Kamu adalah asisten AI untuk aplikasi e-book statistika. Tolong analisis, jawab, atau jelaskan data berikut secara ringkas dan mudah dipahami: " . $inputData;

        // JIKA BELUM ADA SESSION AKTIF (User mulai dari halaman kosong), BIKIN TOKEN BARU!
        if (!session()->has('active_chat_session')) {
            session(['active_chat_session' => 'sess_' . Str::random(10) . '_' . time()]);
        }
        $currentSessionId = session('active_chat_session');

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENROUTER_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://openrouter.ai/api/v1/chat/completions', [
                'model' => 'qwen/qwen-2.5-7b-instruct',
                'messages' => [['role' => 'user', 'content' => $prompt]]
            ]);

            if ($response->failed()) {
                throw new \Exception($response->json()['error']['message'] ?? 'Gagal dapat respon AI.');
            }

            $hasilAI = $response->json()['choices'][0]['message']['content'];

            // SIMPAN KE DATABASE (Pastiin user_id terisi kalau udah login)
            $newChat = AiCalculation::create([
                'user_id'         => auth()->id() ?? null,
                'chat_session_id' => $currentSessionId,
                'input_data'      => $inputData,
                'ai_prompt'       => $prompt,
                'ai_response'     => $hasilAI
            ]);

            // REDIRECT BALIK: Lempar id-nya ke URL biar langsung ke-load di fungsi index()
            return redirect('/ai?chat_id=' . $newChat->id);

        } catch (\Exception $e) {
            return redirect('/ai')->with('error_ai', 'Gagal terhubung ke AI: ' . $e->getMessage());
        }
    }
}