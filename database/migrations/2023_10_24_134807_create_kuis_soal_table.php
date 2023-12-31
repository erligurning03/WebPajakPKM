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
        Schema::create('kuis_soal', function (Blueprint $table) {
            $table->id();
            $table->integer('no_soal');
            $table->longText('isi_soal');
            $table->enum('jawaban_soal',['A','B','C','D']);
            $table->longText('pembahasan_soal');
            $table->unsignedBigInteger('id_kuis');
            $table->foreign('id_kuis')->references('id')->on('kuis_level');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis_soal');
    }
};
