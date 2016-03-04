@extends('formatos.base')
@include('mensajes.msjexitoso')
@section('titulo', 'Diagnósticos')
@section('subtitulo', 'Lista de diagnósticos')
@section('content')


  <table class="table table-striped">
    <head>
        <th>Código</th>
        <th>Diagnóstico</th>
        <th></th>
      </head>
      @foreach($diagnosticos as $diagnostico)
      <tbody>
        <td>{{$diagnostico->id_diagnostico}}</td>
        <td>{{$diagnostico->diagnostico}}</td>
        <td>
           {!!link_to_route('diagnosticos.edit', $title = 'editar', $parameters = $diagnostico->id_diagnostico, $attributes = ['class'=>'btn btn-primary'])!!}
        </td>
      </tbody>
      @endforeach
  </table>

{!!$diagnosticos->render()!!}
@stop
