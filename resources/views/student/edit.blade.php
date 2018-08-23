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

    <title>Edita tu perfil</title>

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
                        <h1>Editar estudiante.</h1>
                        <p class="lead"><h4>Modifica los datos que necesitas editar.</h4></p>  
                    </div>
        
                </div>
        </div>      

        <div class="container">
         <form action="{{ route('student_update', ['user' => Auth::user()->id] )}}" method="POST">
         {{ csrf_field() }}
                {{ method_field('PUT') }}
          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="Name" class="form-control" value="{{ Auth::user()->nombre }}" id="nombre"  name="nombre" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Correo:</label>
              <input type="email" class="form-control" value="{{ Auth::user()->email }}" id="email" name="email"  required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="idPass">Contraseña anterior: </label>
              <input type="password" data-minlength="6" class="form-control" id="idPass" placeholder="*********" name="idPass" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="password">Contraseña nueva: </label>
              <input type="password" data-minlength="6" class="form-control" id="password" name="password" placeholder="Contraseña nueva" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group" >
              <label for="noControl">Numero de control:</label>
              <input type="value" class="form-control" value="{{ Auth::user()->noControl }}" id="noControl" name="noControl" placeholder="14151834" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="carrera">Carrera: </label>
              <select class="form-control" value="{{ Auth::user()->carrera }}" input type="text" id="carrera" name="carrera">
                @foreach($carreras as $carrera)
                  <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
                @endforeach()
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="semestre">Selecciona tu semestre: </label>
              <select class="form-control" value="{{ Auth::user()->semestre }}" input type="text" id="semestre" name="semestre">
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
          <div class="col-md-6">
            <div class="form-group">
              <label for="tipo">Rol: </label>
              <select class="form-control" input type="text" id="tipo" value="{{ Auth::user()->tipo }}" name="tipo">
                <option>{{ Auth::user()->tipo }}</option>
                <option>Alumno</option>
                <option>Tutor</option>
              </select>
            </div>
          </div>
          <div class="col-md-4000000">          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Guardar datos</button>
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

@include('_footer')
@include('_modals')

</html>
