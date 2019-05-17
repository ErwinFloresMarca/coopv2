<html>
<head>
	<title>Nueva Amortizacion</title>
</head>
<body>
	{{Form::open(array('route'=>'amortizacion.store','method'=>'post')) }}
       {{ Form::label('ci','C.I: '.$datos['socio']->ci.'') }}
       <br>
       {{ Form::label('nombre',
              'Socio: '.$datos['socio']->nombres.' '.
                $datos['socio']->paterno.' '.
                $datos['socio']->materno.'')}}

       <br>
       {{ Form::label('nSocio','No. Socio: '.$datos['numero'].'')}}
       <br>
       {{ Form::label('saldo','Saldo: '.$datos['saldo'].' Bs.')}}
       {{ Form::hidden('saldo',$datos['saldo'])}}
       <br>
       {{ Form::label('numCuotas','Numero de cuotas: '.$datos['cuotas'].'.')}}
       <br>
       {{ Form::label('monto','Monto a amortizar: ')}}
       {{ Form::number('monto','0', ['id'=>'monto','required','min'])}}
       <br>
       {{ Form::hidden('prestamo_id',$datos['prestamo_id'])}}
       {{ Form::hidden('interes',$datos['interes'])}}
       {{ Form::hidden('capital',$datos['capital'])}}
       {{ Form::hidden('ci',$datos['socio']->ci)}}
       {{ Form::reset('Borrar') }}
       {{ Form::submit('Pagar',['class'=>'']) }}
</body>
</html>
