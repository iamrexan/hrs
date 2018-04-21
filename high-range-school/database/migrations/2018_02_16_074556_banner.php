<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function(Blueprint $table){
           $table->increments('id');
           $table->string('banner_title');
           $table->text('banner_description');
           $table->string('banner_image');
           $table->string('created_by');
           $table->string('visibility_status');
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
        //
    }
}
