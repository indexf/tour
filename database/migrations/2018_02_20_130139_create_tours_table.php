<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


            $table->string('name');
            $table->string('page_title');
            $table->string('avatar');
            $table->string('main_img');
            $table->string('group');// абхазия или крым
            $table->text('description');
            $table->text('tour_included');
            $table->text('price_included');
            $table->text('tour_this');
            $table->text('route');
            $table->string('price');
            $table->string('video');
            $table->string('video_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
