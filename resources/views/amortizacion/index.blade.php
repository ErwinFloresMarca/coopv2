<html>
<head>
	<title>Buscar socios con prestamos</title>
</head>
<body>
	@if(session('mensaje'))
		<font color='red'>{{session('mensaje')}}</font>
	@endif
	{{ Form:: open(['route'=>'amortizacion.buscar', 'method'=>'post']) }}
	   {{ Form::label('ci','C.I.:') }}
	   {{ Form::text('ci','',['id'=>'ci','placeholder'=>'Introduzca el C.I.']) }}
	   <br>
	   {{ Form::reset('Borrar') }}
	   {{ Form::submit('Buscar') }}
	{{ Form::close() }}
	@if($errors->has('ci'))
	@foreach ($errors->all() as $error)
				<font color='red'>{{$error}}</font><br>
	@endforeach
	@endif
</body>
</html>
