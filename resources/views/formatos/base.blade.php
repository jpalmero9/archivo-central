<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/favicon.ico')}}">

    <title>Historias Médicas</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('/assets/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->     
    <link href="{{ asset('dashboard.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('/assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{asset('/ficha')}}">Historias Médicas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{asset('/ficha')}}">Principal</a></li>
            <!-- <li><a href="#">Configurar</a></li> -->
            <!-- <li><a href="#">Perfil</a></li> -->
            <li><a href="#">Ayuda</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{asset ('/usuarios')}}">Usuarios</a></li>
                <li><a href="{{asset ('/usuarios/create')}}">Nuevo usuario</a></li>
                <!-- <li><a href="#">Something else here</a></li> -->
                <li role="separator" class="divider"></li>
                <li><a href="#">Salir</a></li>
                <!-- <li role="separator" class="divider"></li> -->
                <!-- <li><a href="#">One more separated link</a></li> -->
              </ul>
          </li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Buscar...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
              <li class="active"><a href="#">Opciones <span class="sr-only">(current)</span></a></li>
              <li><a href="{{asset('/ficha')}}">Historias registradas</a></li>
              <li><a href="{{asset('/ficha/create')}}">Nueva Historia médica</a></li>
              <li role="separator" class="divider"></li>
              <!--<li><a href="#">Export</a></li> -->
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="{{asset('/ingresos')}}">Tipos de Ingresos</a></li>
              <li><a href="{{asset('/ingresos/create')}}">Nuevo Tipo de Ingreso</a></li>
              <li role="separator" class="divider"></li>
              <!--<li><a href="">One more nav</a></li>
              <li><a href="">Another nav item</a></li>
              <li><a href="">More navigation</a></li> -->
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="{{asset('/diagnosticos')}}">Diagnósticos</a></li>
              <li><a href="{{asset('/diagnosticos/create')}}">Nuevo Diagnóstico</a></li>
              <!--<li><a href="">Another nav item</a></li> -->
            </ul>
        </div>

      </div>

  			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

  				  <h1 >@yield('titulo')</h1>
  				  <h3 >@yield('subtitulo')</h3>

  		       <div class="table-responsive">

      				   @yield('content')

      			 </div>

  		  </div>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('/assets/js/vendor/jquery.min.js')}}"><\/script>')</script>
    <script src="{{ asset('/dist/js/bootstrap.min.js')}}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('/assets/js/vendor/holder.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
