@extends('master')
@section('Contenido')
Esta es la vista del index de Admin
<br>
Mi nombre es: {{$parametro['nombre']}} y tengo {{$parametro['edad']}} años 
@endsection
@section('pie')
@parent
AQuí los datos en C
@endsection