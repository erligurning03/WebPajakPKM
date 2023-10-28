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
        Schema::create('kuis_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('id_soal');
            $table->foreign('id_soal')->references('id')->on('kuis_soal');
            $table->enum('opsi_jawaban',['A','B','C','D']);
            $table->string('isi_jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis_jawaban');
    }
};
