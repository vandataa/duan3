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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('nameSession');
            $table->string('session');
            $table->string('lession');
            $table->bigInteger('teacher_id')->unsigned();
            $table->string('role_session');
            $table->string('cost');
            $table->timestamps();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
