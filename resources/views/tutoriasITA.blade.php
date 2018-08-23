<html lang="es">
<link href="img/favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/info.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/favicon.png" rel="icon" type="image/png" />

    <title>Tutorias ITA</title>

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
            </div>
        </header>

        <div class="well" id="Inicio" >
        <div class="container">
        <div class="col-md-8">
                        <h1>Tutorias ITA.</h1>
                        <p class="lead"><h4><br>Podrás ser tutor o estudiamte con este proyecto. Aquí podrás buscar las materias con las que necesitas quiźa un poco de ayuda. O tal vez si tienes talento en alguna materia impartida en el ITA tu podrás ser el tutor de la misma.</h4><br>"El conocimiento es la mejor inversión que se puede hacer." (Abraham Lincoln)</p><br>     
                    </div>
        <div align=center>
        <div class="col-md-1"></div>
                        <div class="col-md-3"><img src="/img/itaLogo.jpg" alt="" class=" img-rounded" width="300" ><p><h4></h4><h6></h6></p>
                        
                        </div>
                    </div>
                </div>
        </div>      

        <div class="container">
        <h4>Haz clic en <button class="label btn-success" disabled="true"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></button> para añadir la materia.</h4><br>
            <div class="table-responsive">
          <table class="table table-hover table-responsive">
            <thead>
              <tr>
                <th>id</th>
                <th>Materia</th>
                <th>Sem.</th>
                <th>Cupo</th>
                <th>Carrera</th>
                <th>Tutor</th>
                <th>Aula</th>
                <th>Hora</th>
                <th>Clave</th>
              </tr>
            </thead>
            <body>
            @foreach($materias as $materia)
              <tr>
                <th scope="row">{{ $materia->id }}</th>
                <td>{{ $materia->materia }}</td>
                <td>{{ $materia->semestre }}</td>
                <td>{{ $materia->cupo }}</td>
                <td>{{ $materia->carrera }}</td>
                <td>{{ $materia->tutor }}</td>
                <td>{{ $materia->aula }}</td>
                <td>{{ $materia->hora }}</td>
                <td>{{ $materia->clave }}</td>
                <td>
                  <form action="{{ route('materia_delete', ['materia' => $materia->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <button class="label btn-danger"><span class="glyphicon  glyphicon-remove-sign" aria-hidden="true"></span></button>
                  </form>
                </td>
                <td>
                  <form action="" method="get">
                    <button class="label btn-info"><span class="glyphicon  glyphicon-edit" aria-hidden="true"></span></button>
                  </form>
                </td>
                <td>
                  <form action="{{ route('request', ['materia' => $materia->id]) }}" method="post">
                    {{ csrf_field() }}
                    <button class="label btn-success"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </table>
        </form>
        <div align="right">
        @if (Auth::user()->tipo == 'admin')
            <a href="{{route('materias_create')}}"><button class="btn btn-primary"><span class="glyphicon  glyphicon-plus-sign" aria-hidden="true"></span> Nueva materia</button></a>
          @else
            @if (Auth::user()->tipo == 'Tutor')
              <a href="{{route('materias_create')}}"><button class="btn btn-primary"><span class="glyphicon  glyphicon-plus-sign" aria-hidden="true"></span> Nueva materia</button></a>
            @elseif (Auth::user()->tipo == 'Alumno')
              
            @else 
                <a href="{{route('student_profile')}}"><button class="btn btn-primary"><span class="glyphicon  glyphicon-edit" aria-hidden="true"></span> Edita tus datos para crear o seleccionar materias</button></a>
            @endif
          @endif
        </div>
        </div>
            
        </div>

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
