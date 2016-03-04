@extends('formatos.base')

@section('titulo', 'Usuarios')
@section('subtitulo', 'Registrar Usuario')
@section('content')
@include('mensajes.msjerror')

	{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
	@include('usuarios.camposUsuarios')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

 @stop