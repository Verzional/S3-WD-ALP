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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('grade');
            $table->string('language');
            $table->float('score')->nullable();
            $table->float('rankPercentile')->nullable();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('school_id')->constrained();
            $table->foreignId('companion_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('schedule_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
