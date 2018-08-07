<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDcategoryDiseaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dcategory_disease', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('disease_id')->unsigned()->nullable();
            $table->foreign('disease_id')->references('id')
            ->on('diseases')->onDelete('cascade');

            $table->integer('dcategory_id')->unsigned()->nullable();
            $table->foreign('dcategory_id')->references('id')
            ->on('dcategories')->onDelete('cascade');

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
        Schema::dropIfExists('dcategory_disease');
    }
}
