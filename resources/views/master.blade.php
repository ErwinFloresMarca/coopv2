<html>
<head>
	<title>Sistema cooperativa de ahorro y credito</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">
</head>
<body>
Mi primera pagina web en Laravel
<table border="1" width="100%">
	<tr>
		<td colspan= 3>Encabezado</td>
	</tr>
	<tr>
		<td >Enlaces</td>
	  <!--<td width="80%">Contenido</td>-->
	  <td>@yield ('Contenido')</td>
	</tr>	
</table>
<h1>
@section ('pie')
Hola a todos

@show

</h1>
</body>
</html>