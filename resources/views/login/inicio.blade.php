@extends('login.base_login')

@section('content')
  @include('mensajes.log_error')
    <div class="container">

        {!!Form::open(['route'=>'login.store', 'class'=>'form-signin', 'method'=>'POST'])!!}
          <h2 class="form-signin-heading">Cotrol de acceso</h2>
          @include('login.camposlogin')
          {!!Form::submit('Ingresar',['class'=>'btn btn-lg btn-primary btn-block'])!!}
        {!!Form::close()!!}


    </div> <!-- /container -->

  @stop