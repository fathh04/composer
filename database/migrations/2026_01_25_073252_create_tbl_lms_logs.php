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
        Schema::create('tbl_lms_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->integer('login_count')->default(0);
            $table->float('avg_session_time')->default(0);
            $table->integer('material_access')->default(0);
            $table->integer('forum_activity')->default(0);
            $table->integer('assignment_submit')->default(0);
            $table->float('quiz_score')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_lms_logs');
    }
};
