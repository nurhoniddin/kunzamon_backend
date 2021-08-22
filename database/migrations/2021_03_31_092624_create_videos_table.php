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
            $table->id();
            $table->integer('videocat_id')->nullable();
            $table->string('image')->nullable();
            $table->string('title_uz')->nullable();
            $table->string('title_cyril')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('video_link_uz')->nullable();
            $table->text('video_link_cyril')->nullable();
            $table->text('video_link_ru')->nullable();
            $table->text('video_link_en')->nullable();
            $table->text('video_file_uz')->nullable();
            $table->text('video_file_cyril')->nullable();
            $table->text('video_file_ru')->nullable();
            $table->text('video_file_en')->nullable();
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
