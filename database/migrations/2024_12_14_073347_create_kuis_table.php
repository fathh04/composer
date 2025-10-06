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
    Schema::create('kuis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('idkelas')->constrained('Kelas')->onDelete('cascade');  // Menghubungkan dengan tabel kelas
        $table->string('judul_kuis');
        $table->text('deskripsi_kuis');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('kuis');
}

};
