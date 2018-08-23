<html lang="es">
<link href="/img/favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

        @if (Auth::guest())
          <title>Perfil</title>
        @else
          <title> {{ Auth::user()->nombre }} </title>
        @endif

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <header>
            <div class="contenedor">    <br><br>
                @include('_barra')
 
        </header>
<div class="well" id="Inicio" >
        <div class="container">
        <div class="col-md-8">
                        <h1><b>{{ Auth::user()->nombre }}</b></h1>
                        <p class="lead">
                        <h4>
                          Numero de control: <b>{{ Auth::user()->noControl }}</b><br>
                          Correo: <b>{{ Auth::user()->email }}</b><br>
                          Carrera: <b>
                            @if (Auth::user()->tipo == 'admin')

                            @else 
                            @endif
                          </b><br>
                          Semestre: <b>{{ Auth::user()->semestre }}</b><br>
                          Rol: <b>{{ Auth::user()->tipo }}</b><br></p>
                        </h4><a href="{{ route('student_edit')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edita tus datos</button></a>
          @if (Auth::user()->tipo == 'Tutor')
            <p>Crea la materia que quieres impartir <a href="{{route('materias_create')}}">aqui.</a></p>
          @elseif (Auth::user()->tipo == 'Alumno')
            <a href="{{ route('tutorias')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Seleccionar materia</button></a>
          @else 
            <p>Completa tus datos para solicitar cualquier materia o impartirla.</a></p>
          @endif
                    </div>
        <div align=center>
        <div class="col-md-1"></div>
                        <div class="col-md-3"><img src="/img/student.png" alt="" class=" img-rounded" width="160" ><p><h4>Tutorías ITA</h4><h6>Perfil</h6></p>
                        
                        </div>
                    </div>
                </div>
        </div>
        <div class="container">

<a href="{{route('tutorias')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Tutorias</button></a>

        </div><!-- /.container -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

@include('_footer')
@include('_modals')

</html>