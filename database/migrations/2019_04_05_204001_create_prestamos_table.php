<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('monto',8,2);
            $table->integer('plazo')->default(0);
            $table->decimal('tasa_interes',8,2);
            $table->decimal('seguro',8,2)->default(0);
            $table->integer('estado');
            $table->integer('socio_id')->unsigned();
            $table->integer('asesor_id')->unsigned();
            $table->foreign('socio_id')->references('persona_id')->on('socios');
            $table->foreign('asesor_id')->references('id')->on('asesores');
            
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
        Schema::dropIfExists('prestamos');
    }
}
