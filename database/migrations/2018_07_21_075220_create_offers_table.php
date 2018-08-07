<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('image_feature');
            $table->string('image_main');
            $table->string('price');
            $table->text('description_en');
            $table->text('description_ar');
            $table->longText('details_en');
            $table->longText('details_ar');
            $table->mediumText('inclusions_en');
            $table->mediumText('inclusions_ar');
            $table->mediumText('exclusions_en');
            $table->mediumText('exclusions_ar');
            $table->mediumText('terms_en');
            $table->mediumText('terms_ar');
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
        Schema::dropIfExists('offers');
    }
}
