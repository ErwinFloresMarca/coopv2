<html>
<head>

	<meta charset="utf-8">
  <title>Nueva persona</title>
</head>
<body>
	{{Form::open(array('route'=>'persona.store','method'=>'post')) }}
       {{ Form::label('ci','C.I: ') }}
       {{ Form::number('ci','0', ['id'=>'ci','required']) }}
       <br>
			 @if($errors->has('ci'))
			 		<font color='red'>{{$errors->first('ci')}}</font><br>
			 @endif
       {{ Form::label('nombres','Nombres: ')}}
       {{ Form::text('nombres','', ['id'=>'nombres',
       'placeholder'=>'Introduzca el nombre','required'])}}
       <br>
			 @if($errors->has('nombres'))
			 		<font color='red'>{{$errors->first('nombres')}}</font><br>
			 @endif
       {{ Form::label('paterno','Apellido paterno: ')}}
       {{ Form::text('paterno','', ['id'=>'paterno',
       'placeholder'=>'Introduzca el apellido paterno','required'])}}
       <br>
			 @if($errors->has('paterno'))
			 		<font color='red'>{{$errors->first('paterno')}}</font><br>
			 @endif
       {{ Form::label('materno','Apellido materno: ')}}
       {{ Form::text('materno','', ['id'=>'materno',
       'placeholder'=>'Introduzca el apellido materno','required'])}}
       <br>
			 @if($errors->has('materno'))
			 		<font color='red'>{{$errors->first('materno')}}</font><br>
			 @endif
       {{ Form::label('telefono','Telefono: ')}}
       {{ Form::number('telefono','', array("id"=>'telefono')) }}
       <br>
			 @if($errors->has('telefono'))
			 		<font color='red'>{{$errors->first('telefono')}}</font><br>
			 @endif
       {{ Form::label('email','Correo electronico: ')}}
       {{ Form::text('email','', ['id'=>'email',
       'placeholder'=>'Introduzca el correo','required'])}}
       <br>
			 @if($errors->has('email'))
			 		<font color='red'>{{$errors->first('email')}}</font><br>
			 @endif
       {{ Form::label('password','Contraseña: ')}}
       {{ Form::password('password', ['id'=>'password',
       'placeholder'=>'Introduzca contraseña','required'])}}
       <br>
			 @if($errors->has('password'))
			 		<font color='red'>{{$errors->first('password')}}</font><br>
			 @endif
       {{ Form::label('password_confir','Confirmar contraseña: ') }}
       {{ Form::password('password_confir', ['id'=>'password_confir',
       'placeholder'=>'Introduzca contraseña','required'])}}
       <br>
			 @if($errors->has('password_confir'))
			 		<font color='red'>{{$errors->first('password_confir')}}</font><br>
			 @endif
       {{ Form::reset('Borrar') }}
       {{ Form::submit('Guardar',['class'=>'']) }}
		{{Form::close()}}
</body>
</html>
