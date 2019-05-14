<html>
<head>
	<title>Lista de persona en coop</title>
</head>
<body>
	<a href="persona/nuevo">Nueva persona<a>
	<table width="80%" border="1" align="center">
		<thead>
			<tr>
				<th>Nro.</th>
				<th>C.I.</th>
				<th>Nombres</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; ?>
			@foreach ($personas as $persona)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$persona->ci}}</td>
				<td>{{$persona->nombres}} {{$persona->paterno.' '.$persona->materno}}</td>
				<td>{{$persona->telefono}}</td>
				<td>{{$persona->email}}</td>
				<td>
					<a href="persona/editar/ {{$persona->id}} ">Editar</a>
					<!--{{ Crypt::encrypt($persona->id) }}-->
					<a href="persona/eliminar/destroy/{{ $persona->id }}" 
						onclick="return confirm ('¿ELIMINAR USUARIO?')">Eliminar</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>

</body>
</html>