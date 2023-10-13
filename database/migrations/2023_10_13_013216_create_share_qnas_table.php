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
        Schema::create('share_qnas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_qna'); 
            $table->foreign('id_qna')->references('id')->on('qnas'); 
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('tabel_users'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('share_qnas');
    }
};
