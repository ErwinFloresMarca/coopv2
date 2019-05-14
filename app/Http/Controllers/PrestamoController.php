<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prestamo;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function plan_pagos($id){
        $prestamo = Prestamo::find($id);
        return view('prestamo.plan')->with('prestamo',$prestamo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //30/04/2019
    {
        //$socios = Socio::all();
        $socios = DB::table('personas')//debemos usar "join"
                     ->join('socios','socios.persona_id',
                        'personas.id')
                     ->select('socios.id','nombres','paterno','materno')
                     ->get();
        return view('prestamo.create')->with('socios',$socios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $prestamo = new Prestamo;
        $prestamo->monto = $request['monto'];
        $prestamo->tasa_interes = $request['tasa_interes'];
        $prestamo->plazo = $request['plazo'];
        $prestamo->seguro = $request['seguro'];
        $prestamo->estado = 1;
        $prestamo->socio_id = $request['id'];
        $prestamo->asesor_id = 1;
        $prestamo->save(); //(*)
        //return redirect('persona');

        //07/05/19
        //una vez que se almacena (*) se genera una llave
        $prestamo = Prestamo::where('socio_id',$request['id'])//como es = no se pone
                        ->where('asesor_id',$prestamo->asesor_id)
                        ->where('estado',1)
                        //->select('id')
                        ->get()
                        ->last();

        return view('prestamo.plan')->with('prestamo',$prestamo);                        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


//> $socios=DB::table('personas')->join('socios','personas.id','socios.persona_id)
    //->select('socios.id', 'paterno' , 'materno')->get()
