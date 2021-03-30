<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_information_id');
            $table->foreign('personal_information_id')->references('id')->on('personal_information');
            $table->string('ssc_name_of_board');
            $table->integer('ssc_passing_year');
            $table->integer('ssc_percentage');
            $table->string('hsc_name_of_board');
            $table->integer('hsc_passing_year');
            $table->integer('hsc_percentage');
            $table->string('bd_course_name')->nullable();
            $table->string('bd_university')->nullable();
            $table->integer('bd_passing_year')->nullable();
            $table->integer('bd_percentage')->nullable();
            $table->string('md_course_name')->nullable();
            $table->string('md_university')->nullable();
            $table->integer('md_passing_year')->nullable();
            $table->integer('md_percentage')->nullable();
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
        Schema::dropIfExists('education_details');
    }
}
