<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GeminiService; 

class AiChatController extends Controller
{
    public function ask(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'chapter_title' => 'required|string'
        ]);

        $gemini = new GeminiService();

        $systemInstruction = "Kamu adalah seorang Asisten Dosen Kalkulus yang ahli, ramah, dan solutif. "
            . "Tugasmu adalah menjawab pertanyaan mahasiswa seputar topik Turunan dan Integral. "
            . "Jika menuliskan rumus matematika, WAJIB gunakan format LaTeX dengan pembungkus '$$' untuk baris baru atau '$' untuk inline agar sistem bisa merendernya dengan cantik. "
            . "Jangan menjawab pertanyaan di luar konteks matematika atau kalkulus.";

        $prompt = "Saya sedang mempelajari bab: " . $request->chapter_title . ".\nPertanyaan saya: " . $request->question;

        $aiResponse = $gemini->generateResponse($prompt, $systemInstruction);

        return response()->json([
            'answer' => $aiResponse
        ]);
    }
}