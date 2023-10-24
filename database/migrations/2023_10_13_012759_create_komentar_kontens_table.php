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
        Schema::create('komentar_kontens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konten'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('id_konten')->references('id')->on('kontens');
            $table->unsignedBigInteger('user_id'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('isi_komentar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_kontens');
    }
};
