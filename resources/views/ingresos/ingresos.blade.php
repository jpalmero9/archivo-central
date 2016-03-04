@extends('formatos.base')
@include('mensajes.msjexitoso')
@section('titulo', 'Tipos de ingresos')
@section('subtitulo', 'Lista de tipos de ingresos')
@section('content')


<table class="table table-striped">
	  <head>
			<th>Código</th>
			<th>Tipo Ingreso</th>
			<th></th>
	  </head>
	  @foreach($ingresos as $ingreso)
	  <tbody>
			<td>{{$ingreso->id_ingreso}}</td>
			<td>{{$ingreso->ingreso}}</td>
			<td>
			   {!!link_to_route('ingresos.edit', $title = 'editar', $parameters = $ingreso->id_ingreso, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
	  </tbody>
	  @endforeach
</table>

{!!$ingresos->render()!!}
@stop
