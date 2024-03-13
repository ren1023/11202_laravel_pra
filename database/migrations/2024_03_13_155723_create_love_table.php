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
        Schema::create('loves', function (Blueprint $table) {
            $table->id();
            // $table->integer('student_id');
            $table->string('love')->nullable();
            $table->timestamps();
            // $table->foreign('student_id')->references('id')->on('students');

            $table->unsignedBigInteger('student_id');//foreign key
            $table->foreign('student_id')->references('id')->on('students');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('love');
    }
};
