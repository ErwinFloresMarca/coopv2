<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Socio;
class Persona extends Model
{
    protected $table = 'personas';

    public function socio(){
    	return $this->hasOne(Socio::class);
    }
    //12-04-2019
    public function guardar($request){
      $per = new Persona;
        $per->ci = $request['ci'];
        $per->nombres = $request['nombres'];
        $per->paterno = $request['paterno'];
        $per->materno = $request['materno'];
        $per->telefono = $request['telefono'];
        $per->email = $request['email'];
        $per->password = $request['password'];
        //dd($per)
        $per->save();
        //return "persona guardada";
    }
}

//Básicamente estos modelo sirven para hacer consultas, y relacionar tablas
//php artisan make:model Persona

//php artisan tinker 
   //>> $per=App\Persona::all() //muestra a todas las personas registradas

   //$per=App\Persona::find(1) //busca a la persona con id=1
   //$per->socio //muestra al socio cuyo id es 1 

   //$socio=App\Persona::find(1)->socio // persona con id 1 a partir de la persona

  //$per=App\Socio::where('numero',1)->get()->last()->persona //obtiene a la ultima tupla. 
                                     //a partir de socio obtiene a la persona
  //$per=App\Socio::find(1)->persona //muestra el mismo resultado del punto anterior
  //
