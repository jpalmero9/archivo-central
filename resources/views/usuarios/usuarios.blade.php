@extends('formatos.base')
@include('mensajes.msjexitoso')
@section('titulo', 'Usuarios')
@section('subtitulo', 'Usuarios del sistema')
@section('content')


    <table class="table table-striped">
          <head>
            <th>Nro. Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nombre de Usuario</th>
            <th>Correo</th>
            <th>Categoria</th>
            <th></th>
          </head>
          @foreach($usuarios as $usuario)
            <tbody>
              <td>{{$usuario->id_usuario}}</td>
              <td>{{$usuario->identNombre}}</td>
              <td>{{$usuario->identApellido}}</td>
              <td>{{$usuario->nombreUsuario}}</td>
              <td>{{$usuario->email}}</td>
              <td>{{$usuario->categoria}}</td>
              <td>
                 {!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $usuario->id_usuario, $attributes = ['class'=>'btn btn-primary'])!!}
              </td>
            </tbody>
          @endforeach
    </table>
      {!! $usuarios->render() !!}



@stop

