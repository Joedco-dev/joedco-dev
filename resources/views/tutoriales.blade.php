<html lang="es">
<link href="/img/favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/carousel.css">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Joedco-dev</title>

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
        <div class="container">

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
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Tutorial curso php y MySql
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body" align="center">

        <iframe width="700" height="470" src="https://www.youtube.com/embed/UAW7tGAgew4?autoplay=0" frameborder="0" gesture="media" allowfullscreen></iframe>

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Tutorial css/bootstrap
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body" align="center">

        <iframe width="700" height="470" src="https://www.youtube.com/embed/nug1pMke-y4?autoplay=0" frameborder="0" gesture="media" allowfullscreen></iframe>

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
