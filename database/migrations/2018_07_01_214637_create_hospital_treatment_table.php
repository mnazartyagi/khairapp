<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_treatment', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('treatment_id')->unsigned()->nullable();
            $table->foreign('treatment_id')->references('id')
            ->on('treatments')->onDelete('cascade');

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
        Schema::dropIfExists('hospital_treatment');
    }
}
