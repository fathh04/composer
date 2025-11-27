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
        Schema::table('pengguna', function (Blueprint $table) {
            $table->string('gaya_belajar')->nullable();
            $table->text('alasan')->nullable();
            $table->text('rekomendasi')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->dropColumn(['gaya_belajar', 'alasan', 'rekomendasi']);
        });
    }
};
