<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        $chapters = Chapter::orderBy('order', 'asc')->get();
        $currentChapter = $chapters->first(); 

        return view('dashboard', compact('chapters', 'currentChapter'));
    }

    public function show($slug)
    {
        $chapters = Chapter::orderBy('order', 'asc')->get();
        $currentChapter = Chapter::where('slug', $slug)->firstOrFail();

        return view('dashboard', compact('chapters', 'currentChapter'));
    }
}