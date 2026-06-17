<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('ai_calculations', function (Blueprint $table) {
        $table->id();
        $table->string('chat_session_id'); // Kunci agar AI ingat percakapan
        $table->text('input_data');        // Pertanyaan user
        $table->text('ai_response');       // Jawaban AI
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_calculations');
    }
};
