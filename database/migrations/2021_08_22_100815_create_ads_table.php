<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->longText('youtube_link_uz')->nullable();
            $table->longText('youtube_link_cyril')->nullable();
            $table->longText('youtube_link_ru')->nullable();
            $table->longText('youtube_link_en')->nullable();
            $table->longText('video_uz')->nullable();
            $table->longText('video_cyril')->nullable();
            $table->longText('video_ru')->nullable();
            $table->longText('video_en')->nullable();
            $table->longText('image')->nullable();
            $table->longText('content_uz')->nullable();
            $table->longText('content_cyril')->nullable();
            $table->longText('content_ru')->nullable();
            $table->longText('content_en')->nullable();
            $table->string('home')->nullable();
            $table->string('detail')->nullable();
            $table->string('category')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
