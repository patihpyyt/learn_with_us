<?php

use App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// --- 1. Halaman Utama (Home) ---
Route::get('/', function () {
    $riwayat = auth()->check() 
        ? \App\Models\AiCalculation::where('user_id', auth()->id())->latest()->take(5)->get() 
        : collect();

    return view('boks', [
        'title' => 'Home Page',
        'riwayat' => $riwayat 
    ]);
});

// --- 2. Route AI (Public) ---
Route::get('/ai', [AiChatController::class, 'index'])->name('ai');
// Menggunakan method 'prosesAI' sesuai dengan yang ada di Controller kamu
Route::post('/ai/chat', [AiChatController::class, 'prosesAI'])->name('ai.chat'); 

// Route helper untuk ambil data chat by ID (untuk kebutuhan JS)
Route::get('/ai/chat/{id}', function ($id) {
    $chat = \App\Models\AiCalculation::findOrFail($id);
    return response()->json([
        'question' => $chat->input_data,
        'answer' => $chat->ai_response
    ]);
})->middleware('auth'); 



Route::get('/ai', [AiChatController::class, 'index'])->name('ai.index');
Route::post('/ai/proses', [AiChatController::class, 'prosesAI'])->name('ai.chat');
// --- 3. Dashboard Belajar ---
Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');
Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])->name('chapter.show');

// --- 4. Route yang WAJIB Login ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';