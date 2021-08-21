<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz')->nullable();
            $table->string('title_cyril')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_cyril')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->text('body_uz')->nullable();
            $table->text('body_cyril')->nullable();
            $table->text('body_ru')->nullable();
            $table->text('body_en')->nullable();
            $table->text('youtube_link_uz')->nullable();
            $table->text('youtube_link_cyril')->nullable();
            $table->text('youtube_link_ru')->nullable();
            $table->text('youtube_link_en')->nullable();
            $table->longText('video_uz')->nullable();
            $table->longText('video_cyril')->nullable();
            $table->longText('video_ru')->nullable();
            $table->longText('video_en')->nullable();
            $table->text('image');
            $table->foreignId('category_id')->constrained('categories');
            $table->integer('views_count')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
