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
        Schema::table('ai_calculations', function (Blueprint $table) {
            // Nambahin kolom chat_session_id setelah kolom user_id, dan tipenya string (varchar) yang boleh null
            $table->string('chat_session_id')->nullable()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ai_calculations', function (Blueprint $table) {
            // Ini buat ngebatalin (rollback) kalau sewaktu-waktu mau dihapus
            $table->dropColumn('chat_session_id');
        });
    }
};