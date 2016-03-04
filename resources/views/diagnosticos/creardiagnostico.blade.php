@extends('formatos.base')

@section('titulo', 'Diagnósticos')
@section('subtitulo', 'Registrar Diagnóstico')
@section('content')
@include('mensajes.msjerror')


	{!!Form::open(['route'=>'diagnosticos.store', 'method'=>'POST'])!!}
		@include('diagnosticos.camposformdiag')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

 @stop
