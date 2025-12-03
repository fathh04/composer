<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tugas_guru', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pengguna_id');
            $table->unsignedBigInteger('materi_id');

            $table->string('pdf_file')->nullable();

            $table->timestamps();

            $table->foreign('pengguna_id')
                ->references('id')->on('pengguna')
                ->onDelete('cascade');

            $table->foreign('materi_id')
                ->references('id')->on('materi')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tugas_guru');
    }
};
