<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('caption');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('language_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('language_id')
                ->references('id')->on('languages')->onDelete('cascade');
            $table->boolean('approved')->default(1);
            $table->timestamps();
        });

        Schema::create('images_pics', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned();
            $table->string('image_url');
            $table->foreign('post_id')
                ->references('id')->on('images')->onDelete('cascade');
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
        Schema::dropIfExists('images');
        Schema::dropIfExists('images_pics');
    }
}
