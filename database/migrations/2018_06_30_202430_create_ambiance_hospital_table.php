<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbianceHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambiance_hospital', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ambiance_id')->unsigned()->nullable();
            $table->foreign('ambiance_id')->references('id')
            ->on('ambiances')->onDelete('cascade');

            $table->integer('hospital_id')->unsigned()->nullable();
            $table->foreign('hospital_id')->references('id')
            ->on('hospitals')->onDelete('cascade');
            
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
        Schema::dropIfExists('ambiance_hospital');
    }
}
