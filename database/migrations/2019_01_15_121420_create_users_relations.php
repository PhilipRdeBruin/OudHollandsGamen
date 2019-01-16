<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('gebruiker')->unsigned();
            $table->increments('vriend')->unsigned();
            $table->foreign('gebruiker')->references('$act_lnk');
            $table->foreign('vriend')->references('id')->on('users'); 
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
        Schema::dropIfExists('users_relations');
    }
}
