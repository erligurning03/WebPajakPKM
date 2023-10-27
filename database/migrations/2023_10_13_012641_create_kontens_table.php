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
        Schema::create('kontens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('user_id')->references('id')->on('tabel_users'); // Kunci asing ke tabel users
            $table->string('judul');
            $table->string('deskripsi_konten');
            $table->string('isi_konten');
            $table->string('cover_konten');
            $table->string('judul_konten');
            $table->string('url_konten');
            $table->longText('deskripsi_konten');
            $table->unsignedInteger('tipe_konten_id');
            $table->unsignedBigInteger('diupload_oleh'); // Kolom user_id, tipe data unsigned bigint
            $table->foreign('diupload_oleh')->references('id')->on('users'); // Kunci asing ke tabel users
            $table->timestamps(); // Kolom "created_at" dan "updated_at"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontens');
    }
};
