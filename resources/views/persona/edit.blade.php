<html>
<head>
	<title>Nueva persona</title>
</head>
<body>
	{{Form::open(array('url'=>'persona/actualizar','method'=>'post')) }}
       {{ Form::label('ci','C.I: ') }}
       {{ Form::number('ci',$persona->ci, ['id'=>'ci','disabled']) }}
       <br>
       {{ Form::label('nombres','Nombres: ')}}
       {{ Form::text('nombres', $persona->nombres, ['id'=>'nombres'])}}
       <br>
       {{ Form::label('paterno','Apellido paterno: ')}}
       {{ Form::text('paterno', $persona->paterno, ['id'=>'paterno',
       'placeholder'=>'Introduzca el apellido paterno','required'])}}
       <br>
       {{ Form::label('materno','Apellido materno: ')}}
       {{ Form::text('materno', $persona->materno, ['id'=>'materno',
       'placeholder'=>'Introduzca el apellido materno','required'])}}
       <br>
       {{ Form::label('telefono','Telefono: ')}}
       {{ Form::number('telefono',$persona->telefono, array("id"=>'telefono')) }}
       <br>
       {{ Form::label('email','Correo electronico: ')}}
       {{ Form::text('email',$persona->email, ['id'=>'email', 'disabled'])}}
       <br>  
       {{ Form::reset('Borrar') }}
       {{ Form::submit('Guardar',['class'=>'']) }}

       {{ Form::hidden('id', $persona->id )}}


	{{ Form::close() }}

</body>
</html>