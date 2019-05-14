<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci',13);
            $table->string('nombres',30);
            $table->string('paterno',15);
            $table->string('materno',15);
            $table->string('telefono',8);
            $table->string('email',100);
            $table->string('password',100);

            $table->timestamps();
        });
        Schema::create('gerentes',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->timestamps();
        });
        Schema::create('asesores',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->timestamps();
        });
        Schema::create('cajeras',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::dropIfExists('gerentes');
        Schema::dropIfExists('asesores');
        Schema::dropIfExists('cajeras');
        Schema::dropIfExists('personas');
    }
}
//básicamente las migraciones sirven para crear tablas
//php artisan migrate
