<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenRouterService;
use App\Models\AiCalculation;

class AiChatController extends Controller
{

    public function ask(
        Request $request,
        OpenRouterService $ai
    )
    {

        $request->validate([
            'question'=>'required|string'
        ]);


        $answer = $ai->chat(
            $request->question
        );


        // Kalau login baru simpan
        if(auth()->check()){

            AiCalculation::create([

                'user_id'=>auth()->id(),

                'chat_session_id'=>session()->getId(),

                'input_data'=>$request->question,

                'ai_prompt'=>$request->question,

                'ai_response'=>$answer

            ]);

        }


        return response()->json([

            'answer'=>$answer

        ]);

    }

    public function index()
{
    // Mengambil data riwayat jika user login, atau kosongkan jika tidak
    $riwayat = \App\Models\AiCalculation::where('chat_session_id', session()->getId())->get();
    
    return view('ai', [
        'riwayat' => $riwayat,
        'chatMasaLalu' => collect()
    ]);
}

}