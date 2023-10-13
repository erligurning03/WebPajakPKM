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
        Schema::create('tabel_users', function (Blueprint $table) {
            $table->id();
            $table->char('email', 50)->unique();
            $table->char('username', 50)->unique();
            $table->string('password');
            $table->string('foto_profil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_users');
    }
};
