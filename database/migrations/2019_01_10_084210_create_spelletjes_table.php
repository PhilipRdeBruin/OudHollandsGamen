<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpelletjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spelletjes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spel_naam');
            $table->string('link', 191);
            $table->unsignedInteger('aantalspelers');
            $table->timestamps();
            $table->text('spelUitleg')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spelletjes');
    }
}
