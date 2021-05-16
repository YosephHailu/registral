<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_offerings', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(false);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('year');

            $table->foreignId('academic_year_id');
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
        Schema::dropIfExists('registration_offerings');
    }
}
