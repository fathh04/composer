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
        Schema::create('feedback_guru', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengguna_id');   // siswa
            $table->unsignedBigInteger('guru_id');        // guru pemberi feedback
            $table->text('feedback');                     // isi feedback
            $table->timestamps();

            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
            $table->foreign('guru_id')->references('id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback_guru');
    }
};
