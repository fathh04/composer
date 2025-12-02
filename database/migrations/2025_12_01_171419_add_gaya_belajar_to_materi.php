<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->string('gaya_belajar')->after('deskripsi');
        });
    }

    public function down()
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->dropColumn('gaya_belajar');
        });
    }
};
