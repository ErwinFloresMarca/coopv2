<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    //
    public function index(){
    	$per=Persona::all(); //llamando al modelo
    	//dd($personas);
    	//return "Lista de personas";
    	return view('persona.index')->with('personas',$per);
    }
    public function create(){
    	return view("persona.create");
    }

    public function store(Request $request){
        //dd($request)
        $per = new Persona;
        /*$per->ci = $request['ci'];
        $per->nombres = $request['nombres'];
        $per->paterno = $request['paterno'];
        $per->materno = $request['materno'];
        $per->telefono = $request['telefono'];
        $per->email = $request['email'];
        $per->password = $request['password'];
        //dd($per)
        $per->save();*/
        $per->guardar($request);
        //return "persona guardada";
        return redirect('persona'); //redirect a modelo
    }

    //26/04/2019

    public function edit($id){
        $persona = Persona::find($id); //SELECT * FROM´personas where (id=$id)
        //Persona::where('id','<,>,<=,>=,<>', valor)->get()->first();

        return view('persona.edit')->with('persona',$persona);

    }

    public function update(Request $request){
        //dd($request)
        $persona = Persona::find($request['id']);
        $persona->nombres = $request['nombres'];
        $persona->paterno = $request['paterno'];
        $persona->materno = $request['materno'];
        $persona->telefono = $request['telefono'];
        $persona->save();
        return redirect('persona');
    }

    public function destroy($id){
        Persona::destroy($id); //detroy buscaa y elimina, tb es válido

        /*$persona = Persona::find($id);
        //dd($persona);
        //$persona->destroy();
        $persona->delete()*/
        return redirect('persona');
    }
}

//php artisan make:controller PersonaController