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
<<<<<<< HEAD
<<<<<<< HEAD
            $table->unsignedBigInteger('id_konten'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('id_konten')->references('id')->on('kontens'); 
            $table->unsignedBigInteger('user_id'); // Kolom user_id, tipe data unsigned bigint
<<<<<<< Updated upstream
            $table->foreign('user_id')->references('id')->on('tabel_users'); 
            
=======
            $table->foreign('user_id')->references('id')->on('users');
=======
=======
>>>>>>> 3d85955de58ac3c5051cb05728081ea329577e0e
            $table->unsignedBigInteger('konten_id'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('konten_id')->references('id')->on('kontens');
            $table->unsignedBigInteger('disukai_oleh'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('disukai_oleh')->references('id')->on('users');
            $table->timestamps();
<<<<<<< HEAD
>>>>>>> 3d85955de58ac3c5051cb05728081ea329577e0e

>>>>>>> Stashed changes
=======

>>>>>>> 3d85955de58ac3c5051cb05728081ea329577e0e
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
