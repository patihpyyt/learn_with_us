<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AiCalculation;
use Illuminate\Support\Facades\Http;


class AiChatController extends Controller
{
    public function index()
    {
        $riwayat = auth()->check()
            ? AiCalculation::where('user_id', auth()->id())->latest()->get()
            : collect();
           
        return view('ai', compact('riwayat'));
    }

    public function prosesAI(Request $request)
    {
        $request->validate(['angka_kalkulator' => 'required']);

        $inputData = $request->input('angka_kalkulator');
        $prompt = "Kamu adalah asisten AI untuk aplikasi e-book statistika. Tolong analisis, jawab, atau jelaskan data berikut secara ringkas dan mudah dipahami: " . $inputData;

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

            AiCalculation::create([
                'user_id'     => auth()->id() ?? null,
                'input_data'  => $inputData,
                'ai_prompt'   => $prompt,
                'ai_response' => $hasilAI
            ]);

            return redirect()->route('ai')->with('sukses_ai', $hasilAI)->with('input_user', $inputData);

        } catch (\Exception $e) {
            return redirect()->route('ai')->with('error_ai', 'Gagal terhubung ke AI: ' . $e->getMessage());
        }
    }

    public function historyAI()
    {
        $riwayat = auth()->user()->aiCalculations()->latest()->get();
        return view('history', compact('riwayat'));
    }
}
