<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered', function (Blueprint $table) {
            $table->increments('rid');
            $table->text('ropportunityName');
            $table->text('rjobDescription');
            $table->text('rjobLocation');
           
            $table->text('rresponsibilities');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registered');
    }
}
