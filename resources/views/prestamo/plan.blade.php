<html>
<head>
	<title>Plan de pagos</title>
</head>
<body>

	<?php
	  $capital = $prestamo->monto/$prestamo->plazo;
	  $ti = $prestamo->tasa_interes/12/100;
	  $saldo = $prestamo->monto;
	?>
	<table width="90%" align="center" border="1">
		<thead>
			<tr>
				<th>Nro</th>
				<th>Capital</th>
				<th>Interes</th>
				<th>Amortizacion</th>
				<th>Saldo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>{{$saldo}}</td>
			</tr>
			@for($i=1; $i<=$prestamo->plazo; $i++)
			<tr> <?php $interes =$saldo*$ti; ?>
				<td>{{ $i }}</td>
				<td>{{ round($capital,2) }}</td>
				<td>{{ round($interes,2) }}</td>
				<td>{{ round($capital+$interes,2) }}</td>
				<td>{{ round($saldo -= $capital,2) }}</td>
			</tr>
			@endfor
		</tbody>
	</table>

</body>
</html>