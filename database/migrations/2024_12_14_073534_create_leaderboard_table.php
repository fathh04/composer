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
        Schema::create('leaderboard', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idkelas')->constrained('Kelas')->onDelete('cascade');  // Menghubungkan dengan tabel kelas
            $table->foreignId('idpengguna')->constrained('pengguna')->onDelete('cascade');  // Menghubungkan dengan tabel pengguna
            $table->integer('total_skor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderboard');
    }
};
