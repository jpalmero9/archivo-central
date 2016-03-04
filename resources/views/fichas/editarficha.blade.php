@extends('formatos.base')

@section('titulo', 'Historia Médica')
@section('subtitulo', 'Registrar Historia Médica')
@section('content')
@include('mensajes.msjerror')


	{!!Form::model($ficha, ['route'=>['ficha.update', $ficha->id_ficha], 'method'=>'PUT'])!!}
	@include('fichas.camposformficha')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['ficha.destroy', $ficha->id_ficha], 'method'=>'DELETE'])!!}
	{!!Form::submit('Borrar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}


 @stop
