<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('caption');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('language_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('video_url',1024);
            $table->foreign('user_id')
                ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('language_id')
                ->references('id')->on('languages')->onDelete('cascade');
            $table->boolean('approved')->default(1);
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
        Schema::dropIfExists('videos');
    }
}
