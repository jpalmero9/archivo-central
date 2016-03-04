@extends('formatos.base')

@section('titulo', 'Usuarios')
@section('subtitulo', 'Editar Usuarios')
@section('content')
@include('mensajes.msjerror')


	{!!Form::model($usuarios, ['route'=>['usuarios.update', $usuarios->id_usuario], 'method'=>'PUT'])!!}
	
	@include('usuarios.camposUsuarios')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['usuarios.destroy', $usuarios->id_usuario], 'method'=>'DELETE'])!!}
	{!!Form::submit('Borrar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}


 @stop
