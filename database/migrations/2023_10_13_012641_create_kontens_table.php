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
            $table->string('video_foto_konten');
            $table->bigInteger('jumlah_like');
            $table->bigInteger('jumlah_komentar');
            $table->bigInteger('jumlah_share');
            $table->enum('jenis_konten', ['video', 'podcast','berita']);
            $table->timestamp('tanggal_upload')->useCurrent(); // Kolom "tanggal_upload" yang menyimpan tanggal dan waktu upload
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
