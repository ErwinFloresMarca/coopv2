<html>
<head>
	<title>Buscar socios con prestamos</title>
</head>
<body>

	{{ Form:: open(['route'=>'amortizacion.buscar', 'method'=>'post']) }}
	   {{ Form::label('ci','C.I.:') }}
	   {{ Form::text('ci','',['id'=>'ci','placeholder'=>'Introduzca el C.I.','required']) }}
	   <br>
	   {{ Form::reset('Borrar') }}
	   {{ Form::submit('Buscar') }}
	{{ Form::close() }}

</body>
</html>