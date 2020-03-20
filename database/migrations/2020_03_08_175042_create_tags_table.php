<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('tags_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('article_id')->unsigned();
            $table->timestamps();

            $table->unique(['article_id','tag_id']);
            $table->foreign('article_id')
                ->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')->on('tags');

        });
        Schema::create('tags_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('image_post_id')->unsigned();
            $table->timestamps();
            $table->unique(['image_post_id','tag_id']);
            $table->foreign('image_post_id')
                ->references('id')->on('images')->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');

        });
        Schema::create('tags_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('video_post_id')->unsigned();
            $table->timestamps();
            $table->unique(['video_post_id','tag_id']);
            $table->foreign('video_post_id')
                ->references('id')->on('videos')->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');

        });
        Schema::create('tags_podcasts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('podcast_id')->unsigned();
            $table->timestamps();
            $table->unique(['podcast_id','tag_id']);
            $table->foreign('podcast_id')
                ->references('id')->on('podcasts')->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('tags_articles');
        Schema::dropIfExists('tags_images');
        Schema::dropIfExists('tags_videos');
        Schema::dropIfExists('tags_podcasts');
    }
}
