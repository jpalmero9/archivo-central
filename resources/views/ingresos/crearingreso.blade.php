@extends('formatos.base')

@section('titulo', 'Tipos de ingresos')
@section('subtitulo', 'Registrar tipos de ingresos')
@section('content')
@include('mensajes.msjerror')


	{!!Form::open(['route'=>'ingresos.store', 'method'=>'POST'])!!}
		@include('ingresos.camposforming')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}




 @stop
