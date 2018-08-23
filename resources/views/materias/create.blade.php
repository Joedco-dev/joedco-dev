<html lang="es">
<link href="/img/favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/info.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/favicon.png" rel="icon" type="image/png" />

    <title>Nueva materia</title>

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
                        <h1>Dar de alta una materia.</h1>
                        <p class="lead"><h4>Ingresa los datos solicitados</h4></p>  
                    </div>
        
                </div>
        </div>      

<br><br>

        <div class="container">
         <form action="{{ route('materia_add')}}" method="POST">
         {{ csrf_field() }}
          <div class="col-md-2">
            <div class="form-group">
              <label for="idNombre">Materia:</label>
              <input type="Nombre" class="form-control" id="idNombre" placeholder="Nombre" name="idNombre" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="idCarrera">Carrera: </label>
              <select class="form-control" input type="text" id="idCarrera" name="idCarrera">
              @foreach($carreras as $carrera)
                <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
              @endforeach()
              </select>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <label for="idSemestre">Semestre: </label>
              <select class="form-control" input type="text" id="idSemestre" name="idSemestre">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
            </div>
          </div>
          <div class="col-md-1  ">
            <div class="form-group">
              <label for="idHora">Hora: </label>
              <select class="form-control" input type="text" id="idHora" name="idHora">
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <option>13:00</option>
                <option>14:00</option>
                <option>15:00</option>
                <option>16:00</option>
                <option>17:00</option>
                <option>18:00</option>
                <option>19:00</option>
                <option>20:00</option>
              </select>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <label for="idCupo">Cupo: </label>
              <select class="form-control" input type="text" id="idCupo" name="idCupo">
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>25</option>
                <option>30</option>
                <option>35</option>
                <option>40</option>
                <option>45</option>
                <option>50</option>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <label for="idTutor">Tutor: </label>
            @if (Auth::user()->tipo == 'admin')
              <select class="form-control" input type="text" id="idTutor" name="idTutor">
                @foreach($users as $user)
                  <option>{{ $user->nombre }}</option>
                @endforeach()
              </select>
            @else
            <input type="text" class="form-control" id="idTutor" value="{{ Auth::user()->nombre }}" name="idTutor" disabled="true">
            @endif
          </div>
           <div class="col-md-2">
            <div class="form-group">
              <label for="idNombre">Dias:</label>
              <input type="Nombre" class="form-control" id="idDias" placeholder="Lun, Mart, Mier... etc." name="idDias" required>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <label for="idAula">Aula:</label>
              <input type="Number" class="form-control" id="idAula" placeholder="Aula" name="idAula" required>
            </div>
          <div class="col-md-10"></div>
          <div align="right">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Guardar datos</button>
          </div>
        </form>
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
<br><br><br>
@include('_footer')
@include('_modals')

</html>
