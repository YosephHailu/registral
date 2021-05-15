<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->unsignedBigInteger('stream_id');
            $table->unsignedBigInteger('academic_year_id');
            $table->unsignedBigInteger('coordinator_id')->nullable();

            $table->foreign('coordinator_id')->references('id')->on('users');
            $table->foreign('stream_id')->references('id')->on('streams');
            $table->foreign('academic_year_id')->references('id')->on('academic_years');
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
        Schema::dropIfExists('sections');
    }
}
