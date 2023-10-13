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
        Schema::create('tabel_xps', function (Blueprint $table) {
            
            $table->unsignedBigInteger('user_id'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('user_id')->references('id')->on('tabel_users'); // Kunci asing ke tabel users
            $table->integer('jlh_skor_xp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_xps');
    }
};
