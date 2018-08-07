<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('slug')->unique();
            $table->mediumText('ayur_presc_en');
            $table->mediumText('ayur_presc_ar');
            $table->mediumText('treat_proced_en');
            $table->mediumText('treat_proced_ar');
            $table->string('stay_dur_en');
            $table->string('stay_dur_ar');
            $table->mediumText('exp_outcome_en');
            $table->mediumText('exp_outcome_ar');
            $table->string('cost');
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
        Schema::dropIfExists('diseases');
    }
}
