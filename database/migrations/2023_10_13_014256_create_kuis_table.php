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
        Schema::create('kuis', function (Blueprint $table) {
            $table->id();
            $table->string('soal_kuis');
            $table->string('jawaban_benar');
            $table->unsignedBigInteger('id_opsi'); 
            $table->foreign('id_opsi')->references('id')->on('opsi_kuis'); 
            $table->enum('level_kuis', ['dasar', 'menengah', 'ahli']);
            $table->time('waktu_kuis');
            // $table->unsignedBigInteger('id_level_kuis'); 
            // $table->foreign('id_level_kuis')->references('id')->on('level_kuis'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis');
    }
};
