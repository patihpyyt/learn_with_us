<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        // Kita arahkan ke file blade bernama index.blade.php di dalam folder views/dosen/materi/
        return view('dosen.materi.index', [
            'title' => 'Kelola Materi Kuliah'
        ]);
    }
}