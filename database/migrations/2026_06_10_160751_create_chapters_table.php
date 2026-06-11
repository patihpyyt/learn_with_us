<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul Bab
            $table->string('slug')->unique(); // URL (misal: /belajar/studi-kasus)
            $table->longText('content'); // Isi materi format Markdown + LaTeX
            $table->integer('order')->default(0); // Urutan bab di sidebar
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
