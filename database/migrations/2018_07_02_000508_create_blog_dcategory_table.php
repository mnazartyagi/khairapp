<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogDcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_dcategory', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('blog_id')->unsigned()->nullable();
            $table->foreign('blog_id')->references('id')
            ->on('blogs')->onDelete('cascade');

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
        Schema::dropIfExists('blog_dcategory');
    }
}
