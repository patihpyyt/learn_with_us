<?php

use App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
// 1. Halaman Utama (Public)
Route::get('/', function () {
    return view('boks', [
        'title' => 'Buku kalkulus turunan fungsi dan integral',
        'riwayat' => collect() 
    ]);
});

// 2. Route untuk AI (Public)
Route::get('/ai', [App\Http\Controllers\AiChatController::class, 'index'])->name('ai');
Route::post('/ai-chat', [AiChatController::class, 'chat'])->name('ai.chat');
=======

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


>>>>>>> upstream/main

Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');
Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])->name('chapter.show');

// 4. Route yang WAJIB Login (Hanya untuk profil user)
Route::middleware('auth')->group(function () {
    // Profil User
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
<<<<<<< HEAD
    // Dashboard sudah dipindah ke atas, jadi tidak perlu lagi di sini
=======
    
  
    Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])->name('chapter.show');
>>>>>>> upstream/main
});

require __DIR__.'/auth.php';