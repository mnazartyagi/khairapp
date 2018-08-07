<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('normal_user_id')->unsigned()->nullable();
            $table->foreign('normal_user_id')->references('id')->on('normal_users')->ondelete('cascade');
            $table->string('normal_user_email');
            $table->string('name');
            $table->date('dob');
            $table->string('pass_no');
            $table->string('country');
            $table->boolean('liesure_tour')->nullable();
            $table->boolean('personel_chef')->nullable();
            $table->boolean('bystander')->nullable();
            $table->boolean('interpreter')->nullable();
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
        Schema::dropIfExists('patient_requests');
    }
}
