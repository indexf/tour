<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


            $table->text('description_criemea');
            $table->text('description_abkhazia');
            $table->text('about_text');

            $table->string('company_phone');
            $table->string('company_email');
            $table->string('leads_email');
            $table->string('link_vk');
            $table->string('link_fb');
            $table->string('link_inst');

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
        Schema::dropIfExists('mains');
    }
}
