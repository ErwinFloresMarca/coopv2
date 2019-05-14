<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
use App\Prestamo;
class Socio extends Model
{
    protected $table = 'socios';
    public function persona(){
    	return $this->belongsTo(Persona::class);
    	}

    public function prestamos(){
    	return $this->hasMany(Prestamo::class);
    }
}
// php artisan make:model Socio
//php artisan tinker 
   //>> $per=App\Socio::all() //muestra a todos los socios registrados

//$socio=App\Socio::find(1) //muestra al socio con id =1
//$socio->prestamos //muestra los prestamos que tienen el socio de la consulta anterior
