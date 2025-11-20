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
        Schema::create('code_submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->json('files'); // JSON: { "index.html": "...", "style.css": "...", "script.js": "..." }
            $table->longText('output')->nullable(); // the srcdoc / rendered output
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('code_submissions');
    }
};
