<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userextend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
           $table->string('batch'); 
           $table->string('phone'); 
           $table->text('address_1'); 
           $table->string('city'); 
           $table->string('pincode'); 
           $table->string('chapter'); 
           $table->text('address_2'); 
           $table->string('alumni'); 
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
