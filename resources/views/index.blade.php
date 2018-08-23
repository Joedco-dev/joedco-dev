<html lang="es">
<link href="/img/favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/carousel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

<title>Joedco-dev</title>

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
                        <h1>Servicio freelancer.</h1>
                        <p class="lead"><h4><br>El mejor servicio freelancer ahora mas cerca de ti. Páginas web, aplicaciones moviles, puntos de venta, plataforma web y una app movil conectadas mediante una base de datos alojada en la nube para hacer crecer tu negocio.</h4><br>Todo lo que necesitas para extender tu negocio y lograr alcances inimaginables lo encuentras aqui. Joedco-dev, el negocio que ayuda a tu negocio.</p><br>
                    </div>
        <div align=center>
        <div class="col-md-1"></div>
                        <div class="col-md-3"><img src="img/favicon.png" alt="" class=" img-rounded" width="160" ><p><h4>Joedco-development</h4><h6>Soluciones siempre</h6></p>

                        </div>
                    </div>
                </div>
        </div>
 <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Soluciones en informática</h1>
            <h3>Descuida, Joedco-dev estará ahí para ayudarte.</h3>
        </hgroup>
        <a href="{{route('servicios')}}"><button class="btn btn-hero btn-lg" role="button">Lee un poco mas</button></a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>¡Házlo tu mismo!</h1>
            <h3>Puedes consultar dentro de los diversos tutoriales disponibles.</h3>
        </hgroup>
        <a href="{{route('tutoriales')}}"><button class="btn btn-hero btn-lg" role="button">Aquí</button></a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>¿Aún tienes dudas?</h1>
            <h3>Comunícate conmigo, estoy para ayudarte.</h3>
        </hgroup>
       <a href="{{route('contacto')}}"> <button class="btn btn-hero btn-lg" role="button">Contacto</button></a>
      </div>
    </div>
  </div>
</div>

<div class="container">

<div class="col-md-1"></div>
<div class="col-md-10">
<p class="lead"><h3><br>¿Que encuentro en Joedco-dev?.</h3><br></p>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Puntos a cumplir de la página web
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        -ABC<br>
        -Validación de datos<br>
        -Consultas<br>
        -PDF de las consultas<br>
        -Control de usuarios<br>
        -Capa de presentación<br>
        -Capa de datos<br>
        -Seguridad<br>
        -Responsive<br>
        -Cliente/servidor<br>
        -Linux/XAMPP<br>
        -No YII<br>
        -Relación vista<br>
        -BD<br>
        -POO<br>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Tutorias ITA
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Podrás ser tutor o estudiamte con este proyecto. Aquí podrás buscar las materias con las que necesitas quiźa un poco de ayuda. O tal vez si tienes talento en alguna materia impartida en el ITA tu podrás ser el tutor de la misma. <br> <br>
        <a href="{{route('tutorias')}}"><button class="btn btn-primary" type="button" data-toggle="modal"> <icon class="glyphicon glyphicon-book"n aria-hidden="true"></icon> ¡Echa un vistazo!</button></a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Servicio Feelancer
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        El mejor servicio freelancer a a tu disposición, con solo un par de clics podrás llevar a tu empresa al éxtio, un punto de venta personalizado, aplicaciones moviles, tu propia página web, un control de usuarios para controlar el acceso de tus empleados, etc.
        <br><br>
        <a href="servicios.php"><button class="btn btn-primary" type="button" data-toggle="modal"> <icon class="glyphicon glyphicon-link"n aria-hidden="true"></icon> ¡Echa un vistazo!</button></a>
      </div>
    </div>
  </div>
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Nombre de estudiantes registrados
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">


        <form action="{{ route('student_consulta', ['idNombre']) }}" method="get">
        <select class="form-control" input type="text" id="idNombre" name="idNombre">
          @foreach($students as $student)
              <option value="{{$student->id}}">
                {{$student->nombre}}
              </option>
          @endforeach()
        </select>
            <button class="btn btn-primary" type="submit"><span class="glyphicon  glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
      </div>
    </div>

  </div>

</div></div>



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
