<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libraryfiledb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degital Library', function(Blueprint $table){
           $table->increments('id') ;
           $table->string('title');
           $table->string('file_location');
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
