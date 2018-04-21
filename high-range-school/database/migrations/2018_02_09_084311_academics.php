<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Academics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics_tbldata', function (Blueprint $table) {
           $table->increments('id');
           $table->string('section_title');
           $table->string('section_inner_title');
           $table->string('section_inner_description');
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
