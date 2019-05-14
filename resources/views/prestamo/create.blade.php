<html>
<head>
	<title>Nuevo Préstamo</title>
</head>
<body>
	
	{{ Form::open(array('route'=>'prestamo.crear','method'=>'post'))}}

	     {{Form::label('monto','Monto(Bs.)')}}
	     {{Form::text('monto','0',['id'=>'monto']) }}
	     <br>
	     {{Form::label('plazo','Plazo(meses)')}}
	     {{Form::text('plazo','0',['id'=>'plazo']) }}
	     <br>
	     {{Form::label('tasa_interes','Tasa de interes(%)')}}
	     {{Form::text('tasa_interes','0',['id'=>'tasa_interes']) }}
	     <br>
	     {{Form::label('seguro','Seguro(%)')}}
	     {{Form::text('seguro','0',['id'=>'seguro']) }}
	     <br>
	     <select name='id'>
	     	@foreach($socios as $socio)
	     	<option value='{{$socio->id}}'>{{$socio->nombres." ".$socio->paterno." ".
	     		$socio->materno}} </option>
	     	@endforeach
	     </select>
	     <br>
	     {{Form::reset('Borrar')}}
	     {{Form::submit('Guardar')}}

	{{Form::close()}}

</body>
</html>