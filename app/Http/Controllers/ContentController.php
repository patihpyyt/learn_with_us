<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ContentController extends Controller
{
  public function getContent($slug)
{
    $viewPath = 'materi.' . $slug;

    if (!View::exists($viewPath)) {
        return response()->json(['title' => 'Error', 'body' => 'Konten belum tersedia'], 404);
    }

  
    //  Gunakan ucwords agar huruf pertama jadi kapital
    $title = ucwords(str_replace('-', ' ', $slug));

    return response()->json([
        'title' => $title, 
        'body' => view($viewPath)->render()
    ]);
}
}