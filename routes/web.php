<?php

use App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('boks', [
        'title' => 'Home Page'
    ]);
});


Route::get('/ai', [AiChatController::class, 'index'])->name('ai');

Route::post('/ai/chat', [AiChatController::class, 'prosesAI'])->name('ai.chat');



Route::middleware('auth')->group(function () {
    // Profil User
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
    Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])->name('chapter.show');
});

require __DIR__.'/auth.php';