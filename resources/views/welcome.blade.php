@extends('formatos.base')

<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  registro exitoso!!!
</div>
@endif

@section('titulo', 'Principal')
@section('subtitulo', 'Historias registradas')
@section('content')

                <div>   <table style="width:100%">
                      <tr>
                        <td>Jill</td>
                        <td>Smith</td>      
                        <td>50</td>
                      </tr>
                      <tr>
                        <td>Eve</td>
                        <td>Jackson</td>        
                        <td>94</td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>Doe</td>        
                        <td>80</td>
                      </tr>
                    </table>
                </div>


@stop


