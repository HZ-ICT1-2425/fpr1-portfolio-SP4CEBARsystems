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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('weighing_factor');
            $table->decimal('lowest_passing_grade');
            $table->decimal('best_grade');

//            $table->foreignId('course_id')->constrained();
//            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreignId('course_id');
                //->nullable()->index();
            $table->timestamps();
//            Schema::table('exams', function (Blueprint $table) {
//    //            $table->unsignedBigInteger('course_id');
//    //            $table->foreign('course_id')->references('id')->on('courses');
//    //            $table->foreignId('course_id')->constrained(); //'courses'
//                $table->foreignId('course_id')->constrained();
//            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
