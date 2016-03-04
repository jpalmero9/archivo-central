@extends('formatos.base')
@include('mensajes.msjexitoso')
@section('titulo', 'Historias registradas')
@section('subtitulo', 'Lista de Historias Médicas')
@section('content')


    <table class="table table-striped">
          <head>
            <th>Nro. registro</th>
            <th>Nro. Historia</th>
            <th>C.i. Paciente</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th></th>
          </head>
          @foreach($laficha as $ficha)
            <tbody>
              <td>{{$ficha->id_ficha}}</td>
              <td>{{$ficha->nro_historia}}</td>
              <td>{{$ficha->ci}}</td>
              <td>{{$ficha->nombre}}</td>
              <td>{{$ficha->apellido}}</td>
              <td>
                 {!!link_to_route('ficha.edit', $title = 'editar', $parameters = $ficha->id_ficha, $attributes = ['class'=>'btn btn-primary'])!!}
              </td>
            </tbody>
          @endforeach
        </table>
      {!! $laficha->render() !!}



@stop
