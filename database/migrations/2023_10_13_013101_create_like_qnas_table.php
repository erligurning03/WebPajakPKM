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
        Schema::create('like_qnas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_qna'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('id_qna')->references('id')->on('qnas'); 
            $table->unsignedBigInteger('user_id'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('user_id')->references('id')->on('tabel_users'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_qnas');
    }
};
