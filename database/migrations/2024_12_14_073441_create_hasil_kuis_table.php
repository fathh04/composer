<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('hasil_kuis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('idkuis')->constrained('kuis')->onDelete('cascade');  // Menghubungkan dengan tabel kuis
        $table->foreignId('idpengguna')->constrained('pengguna')->onDelete('cascade');  // Menghubungkan dengan tabel pengguna
        $table->integer('skor');
        $table->timestamp('waktu_pengerjaan')->useCurrent();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('hasil_kuis');
}

};
