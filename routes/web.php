<?php

use App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContentController; 
use Illuminate\Support\Facades\Route;

// --- 1. Halaman Utama ---
Route::get('/', function () {
    $riwayat = auth()->check() 
        ? \App\Models\AiCalculation::where('user_id', auth()->id())->latest()->take(5)->get() 
        : collect();

    return view('boks', [
        'title' => 'Home Page',
        'riwayat' => $riwayat 
    ]);
});


Route::get('/api/content/{slug}', [ContentController::class, 'getContent']);


Route::get('/ai', [AiChatController::class, 'index'])->name('ai.index');
Route::post('/ai/proses', [AiChatController::class, 'prosesAI'])->name('ai.chat');
Route::get('/ai/chat/{id}', function ($id) {
    $chat = \App\Models\AiCalculation::findOrFail($id);
    return response()->json([
        'question' => $chat->input_data,
        'answer' => $chat->ai_response
    ]);
})->middleware('auth');

Route::middleware(['auth', 'role:dosen'])->prefix('dosen')->name('dosen.')->group(function () {
    Route::get('/materi', [DosenMateriController::class, 'index'])->name('materi.index');
});


Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';