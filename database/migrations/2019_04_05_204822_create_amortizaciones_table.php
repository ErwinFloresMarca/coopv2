<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmortizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amortizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('capital',8,2)->default(0);
            $table->decimal('interes',8,2)->default(0);
            $table->decimal('seguro',8,2)->default(0);
            $table->integer('prestamo_id')->unsigned();
            $table->integer('cajera_id')->unsigned();
            $table->foreign('prestamo_id')->references('id')->on('prestamos');
            $table->foreign('cajera_id')->references('id')->on('cajeras');
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
        Schema::dropIfExists('amortizaciones');
    }
}
