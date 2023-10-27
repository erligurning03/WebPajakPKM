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
        Schema::create('like_kontens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konten_id'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('konten_id')->references('id')->on('kontens');
            $table->unsignedBigInteger('disukai_oleh'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('disukai_oleh')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_kontens');
    }
};
