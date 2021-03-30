<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageKnownTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_known', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_information_id')->nullable();
            $table->foreign('personal_information_id')->references('id')->on('personal_information');
            $table->string('hindi')->nullable();
            $table->string('english')->nullable();
            $table->string('gujarati')->nullable();
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
        Schema::dropIfExists('language_known');
    }
}
