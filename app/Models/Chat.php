<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats'; 

    public function chat(Request $request, GroqService $ai) {
    // Pakai session_id dari request, kalau kosong bikin baru (UUID)
    $sessionId = $request->input('chat_session_id') ?? \Illuminate\Support\Str::uuid();
    
    $answer = $ai->ask($request->question, "Materi: " . ($request->chapter_title ?? 'Umum'));
    
    if (auth()->check()) {
        AiCalculation::create([
            'user_id' => auth()->id(),
            'chat_session_id' => $sessionId, // Simpan ID sesi ini
            'input_data' => $request->question,
            'ai_response' => $answer,
        ]);
    }
    
    return response()->json(['answer' => $answer, 'chat_session_id' => $sessionId]);
}

    
}