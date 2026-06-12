<?php

use App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $riwayat = auth()->check() 
        ? \App\Models\AiCalculation::where('user_id', auth()->id())->latest()->take(5)->get() 
        : collect();

    return view('boks', [
        'title' => 'Home Page',
        'riwayat' => $riwayat 
    ]);
});


Route::get('/ai', [AiChatController::class, 'index'])->name('ai');
Route::post('/ai/chat', [AiChatController::class, 'prosesAI'])->name('ai.chat'); 


Route::get('/ai/chat/{id}', function ($id) {
    $chat = \App\Models\AiCalculation::findOrFail($id);
    return response()->json([
        'question' => $chat->input_data,
        'answer' => $chat->ai_response
    ]);
})->middleware('auth'); 



Route::middleware('auth')->group(function () {
    // Profil User
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
  
    Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])->name('chapter.show');
});

require __DIR__.'/auth.php';