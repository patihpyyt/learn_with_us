<?php

use  App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [LearningController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])->name('chapter.show');
    Route::post('/ai/chat', [AiChatController::class, 'ask'])->name('ai.chat');    });

require __DIR__.'/auth.php';
