<html lang="es">
<link href="/img/favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/carousel.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Solicitar materia</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
      <header>
            <div class="contenedor">    <br><br>
                @include('_barra')
        </header>
<div class="well" id="Inicio" >
        <div class="container">
        <div class="col-md-8">
          <h1>Solicitar materia.</h1>
          <p class="lead"><h4><br>La materia seleccionada es: <b>{{ $materias[0]->materia }}</b></h4><br>Al dar clic en aceptar estas solicitando esta materia, lo cual indica que te comprometes a asistir en los días y las horas acordadas. En caso de no poder asistir es necesario comunicarlo al tutor de manera anticipada. De no ser así causará una sansión o la baja del programa de Tutorias-ITA</p><br>

          <form action="{{ route('materia_request' )}}" method="post" style="display: inline;">
          {{ csrf_field() }}
          <input type="hidden" name="claveMat" value="{{ $materias[0]->clave }}">
          <input type="hidden" name="noControl" value="{{ Auth::user()->noControl }}">
            <a href="#"><button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Acepto</button></a>

          </form>

          <a href="{{ route('tutorias') }}" ><button class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button></a>

      </div>
        <div align=center>
        <div class="col-md-4"></div>
          <div class="col-md-4">
           </div>
          </div>
         </div>
        </div>
        <div class="container">




<div class="col-md-1"></div>


        <br><br>


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
