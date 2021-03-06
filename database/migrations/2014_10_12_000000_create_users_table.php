
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gebr_naam', 100)->unique();;

            $table->string('voornaam');
            $table->string('initialen', 10)->nullable();
            $table->string('tussenv', 10)->nullable();
            $table->string('achternaam');

            $table->string('straatnaam')->nullable();
            $table->string('huisnr', 10)->nullable();
            $table->string('postcode', 10)->nullable();
            $table->string('woonplaats')->nullable();

            $table->string('telefoon', 20)->nullable();
            $table->string('mobiel', 20)->nullable();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();

            $tabel->string('foto', 191)->nullable();

            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            $table->timestamp('loged_in_at')->nullable();
            $table->timestamp('Loged_out_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
