<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Socio;
use App\Asesor;
use App\Amortizacion;
class Prestamo extends Model
{
    protected $table = 'prestamos';

    public function socio(){
    	return $this->belongsTo(Socio::class);
    }
    public function asesor(){
    	return $this->belongsTo(Asesor::class);
    }
    public function amortizaciones(){
    	return $this->hasMany(Amortizacion::class);
    }
}
//$socio=App\Prestamo::find(2) //busca en la tabla prestamo el id 2 y muetr ala info
//$socio->socio //muestr alo anterior, pero con los datos de la tabla socios
//$socio->socio->persona //muetra la primero con datos de persona


