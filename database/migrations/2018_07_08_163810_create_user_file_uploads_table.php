<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFileUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_file_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('normal_user_id')->unsigned()->nullable();
            $table->foreign('normal_user_id')->references('id')->on('normal_users')->ondelete('cascade');
            $table->string('user_email');
            $table->string('filename');
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
        Schema::dropIfExists('user_file_uploads');
    }
}
