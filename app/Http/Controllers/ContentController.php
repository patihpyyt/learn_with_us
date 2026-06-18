<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ContentController extends Controller
{
    public function getContent($slug)
    {
        // Pastikan file ada di resources/views/materi/bab1.blade.php
        $viewPath = 'materi.' . $slug;

        if (!View::exists($viewPath)) {
            return response()->json(['title' => 'Tidak Ditemukan', 'body' => 'Konten belum dibuat.'], 404);
        }

        return response()->json([
            'title' => 'Judul untuk ' . $slug,
            'body' => view($viewPath)->render()
        ]);
    }
}