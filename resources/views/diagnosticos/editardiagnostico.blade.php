@extends('formatos.base')
@section('titulo', 'Diagnósticos')
@section('subtitulo', 'Editar Diagnóstico')
@section('content')
@include('mensajes.msjerror')


	{!!Form::model($diagnosticos, ['route'=>['diagnosticos.update', $diagnosticos->id_diagnostico], 'method'=>'PUT'])!!}
	@include('diagnosticos.camposformdiag')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['diagnosticos.destroy', $diagnosticos->id_diagnostico], 'method'=>'DELETE'])!!}
	{!!Form::submit('Borrar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}






 @stop
