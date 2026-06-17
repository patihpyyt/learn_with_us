<?php

use App\Http\Controllers\AiChatController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('boks', [
        'title' => 'Buku kalkulus turunan fungsi dan integral',
        'riwayat' => collect() 
    ]);
});

Route::get('/ai', function () {

    return view('ai', [
        'title' => 'Panel AI & Modul Belajar'
    ]);

});

Route::get('/ai', function () {

    return view('ai', [
        'title' => 'Panel AI & Modul Belajar'
    ]);

});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::get('/dashboard', [LearningController::class, 'index'])
        ->name('dashboard');

    Route::get('/dashboard/belajar/{slug}', [LearningController::class, 'show'])
        ->name('chapter.show');

});


Route::post('/ai/chat', [AiChatController::class, 'ask'])->name('ai.chat');

require __DIR__.'/auth.php';