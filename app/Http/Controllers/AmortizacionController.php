<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Prestamo;
class AmortizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//07/05/19
    public function index()
    {
        return view('amortizacion.index');
    }
//07/05/19
    public function buscar(Request $request){
        //dd($request);
        $reglas=array('ci'=>'required|numeric|exists:personas');

        $mensajes=array(
          'ci.exists'=>'No existe el C.I.',
        );
        $errores=$this->validate(request(),$reglas,$mensajes);
        $socio = Persona::where('ci',$request['ci'])->get()
                    ->last()->socio;
        if(isset($socio)){
            $prestamo = Prestamo::where('socio_id',$socio->id)->where('estado',1)->get()->last();

            if(isset($prestamo)) {
                $amortizacion = $prestamo->amortizaciones;
                if(isset($amortizacion))
                   $total = $amortizacion->sum('capital');
                $cuotas=count($amortizacion);
                $saldo=$prestamo->monto - $total;
                $capital=$saldo/($prestamo->plazo-$cuotas);
                $interes = $saldo*$prestamo->tasa_interes/12/100;

                $datos['socio'] = $socio->persona;
                $datos['numero'] = $socio->numero;
                $datos['saldo'] = $saldo ;
                $datos['capital']=$capital;
                $datos['interes']=$interes;
                $datos['cuotas']=$cuotas;
                $datos['prestamo_id']=$prestamo->id;
                return view('amortizacion.create')->with('datos',$datos);            //¿cómo calcularía la nueva cifra? chan chan chan...., me muero, me muero chu chu chu, ViERNES!!!:D :(
            }
            else {
              return redirect('amortizaciones')->with('mensaje','El socio no tiene prestamos vigentes');
            }
        }
        else{
          return redirect('amortizaciones')->with('mensaje','El C.I. no es socio.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $max=round(($request['saldo']+$request['interes']),2);
        $min=round(($request['capital']+$request['interes']),2);
        $reglas=array('monto'=>'max:'.$max.'|min:'.$min.'');
        //dd($request);
        $errores=$this->validate(request(),$reglas);

        if($errores){
          $amortizacion=new Amortizacion;
          $amortizacion->capital =$request['monto']-$request['interes'];
          $amortizacion->interes=$request['interes'];
          $amortizacion->seguro=0;
          $amortizacion->prestamo_id= $request['prestamo_id'];
          $amortizacion->cajera_id=1;

          $amortizacion->save();
          return redirect('amortizaciones');
        }
        return redirect('amortizaciones');
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
