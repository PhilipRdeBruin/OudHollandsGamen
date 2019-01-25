<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActievespelletjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actievespelletjes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('spel_id');
            $table->unsignedInteger('user_id1');
            $table->unsignedInteger('user_id2');
            $table->unsignedInteger('user_id3')->nullable();
            $table->unsignedInteger('user_id4')->nullable();
            $table->foreign('spel_id')->references('id')->on('spelletjes'); 
            $table->foreign('user_id1')->references('id')->on('users'); 
            $table->foreign('user_id2')->references('id')->on('users'); 
            $table->foreign('user_id3')->references('id')->on('users'); 
            $table->foreign('user_id4')->references('id')->on('users');
            $table->dateTime('aanvangstijdstip');
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
        Schema::dropIfExists('actievespelletjes');
    }
}
