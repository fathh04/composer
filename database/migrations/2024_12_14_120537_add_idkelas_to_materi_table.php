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
    Schema::create('materi', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('idkelas');
        $table->string('judul');
        $table->text('deskripsi');
        $table->string('file_materi');
        $table->timestamps();

        $table->foreign('idkelas')->references('id')->on('kelas')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materi', function (Blueprint $table) {
            //
        });
    }
};
