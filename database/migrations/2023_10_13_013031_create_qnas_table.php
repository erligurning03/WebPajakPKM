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
        Schema::create('qnas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('user_id')->references('id')->on('tabel_users'); 
            $table->string('isi_pertanyaan');
            $table->bigInteger('jumlah_like');
            $table->bigInteger('jumlah_komentar');
            $table->bigInteger('jumlah_share');
            $table->timestamp('tanggal_upload')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qnas');
    }
};
