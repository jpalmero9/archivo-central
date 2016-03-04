@extends('formatos.base')
@section('titulo', 'Tipos de ingresos')
@section('subtitulo', 'Ediar tipos de ingresos')
@section('content')
@include('mensajes.msjerror')


		{!!Form::model($ingresos, ['route'=>['ingresos.update', $ingresos->id_ingreso], 'method'=>'PUT'])!!}
		@include('ingresos.camposforming')
		  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		 {!!Form::open(['route'=>['ingresos.destroy', $ingresos->id_ingreso], 'method'=>'DELETE'])!!}
		 {!!Form::submit('Borrar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}


 @stop
