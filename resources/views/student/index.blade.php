<html lang="es">
<link href="/img/favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

<title>Estudiantes registrados.</title>

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
                        <h1>Estudiantes registrados.</h1>
                        <p class="lead"><h4>Aqui encuentras todos estudiantes registrados en el programa de tutorías. Tutores y alumnos con todos sus datos.</h4><br><br><br>Página admitida solamente a administradores.</p>
                    </div>
        <div align=center>
        <div class="col-md-1"></div>
                        <div class="col-md-3"><img src="/img/student.png" alt="" class=" img-rounded" width="160" ><p><h4>Tutorías ITA</h4><h6>Estudiantes</h6></p>

                        </div>
                    </div>
                </div>
        </div>
        <div class="container">

<a href="{{route('student_index_electronica')}}">
    <button class="btn btn-default"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Electronica</button>
</a>
<a href="{{route('student_index_TICs')}}">
<button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> TICs</button></a>
<a href="{{route('student_index_IGE')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> IGE</button></a>
<a href="{{route('student_index_quimica')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Quimica</button></a>
<a href="{{route('student_index_electrica')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Electrica</button></a>
<a href="{{route('student_index')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Todo</button></a>

        <div class="table-responsive">
          <table class="table table-hover table-responsive">
            <thead
              <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Sem.</th>
                <th>Tipo</th>
                <th>No.Ctrl.</th>
                <th>Correo</th>
              </tr>
            </thead>
            <body>
            @foreach($users as $user)
              <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->carrera }}</td>
                <td>{{ $user->semestre }}</td>
                <td>{{ $user->tipo }}</td>
                <td>{{ $user->noControl }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <form action="{{ route('student_delete', ['user' => $user->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <button class="label btn-danger"><span class="glyphicon  glyphicon-remove-sign" aria-hidden="true"></span></button>
                  </form>
                </td>
                <td>
                  <form action="{{ route('student_pdfIndividual',['user' => $user->id])  }}" method="">
                    {{ csrf_field() }}
                    <button class="label btn-success"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </table>
        </form>
        <div align="right">
        <a href="{{route('student_pdf')}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Crear PDF</button></a>
          <a href="{{route('student_create')}}"><button class="btn btn-primary"><span class="glyphicon  glyphicon-plus-sign" aria-hidden="true"></span> Nuevo estudiante</button></a>
        </div>
        </div>
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
