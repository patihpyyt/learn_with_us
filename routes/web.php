<?php

use App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');
Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])->name('chapter.show');

// 4. Route yang WAJIB Login (Hanya untuk profil user)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Dashboard sudah dipindah ke atas, jadi tidak perlu lagi di sini
});

require __DIR__.'/auth.php';