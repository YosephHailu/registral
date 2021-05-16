<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreamCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stream_courses', function (Blueprint $table) {
            $table->id();   
            $table->float('credit_hour');
            $table->boolean('is_major')->default(false);
            $table->float('ects');
            $table->integer('year');

            $table->foreignId('stream_id');
            $table->foreignId('course_id');
            $table->foreignId('semester_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stream_courses');
    }
}
