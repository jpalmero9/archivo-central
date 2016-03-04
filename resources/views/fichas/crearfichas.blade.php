@extends('formatos.base')

@section('titulo', 'Historia Médica')
@section('subtitulo', 'Registrar Historia Médica')
@section('content')
@include('mensajes.msjerror')


	{!!Form::open(['route'=>'ficha.store', 'method'=>'POST'])!!}
	@include('fichas.camposformficha')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}



 @stop
