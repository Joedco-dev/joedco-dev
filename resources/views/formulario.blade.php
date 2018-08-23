<?php
session_start();
if ($_SESSION["autenticado"] != "SI" || $_SESSION["autenticadoAdmin"] != "SI") 
{
    $_SESSION["noautenticado"] = "SI";
    $_SESSION["autenticado"] = "NO";
    $_SESSION["autenticadoAdmin"] = "NO";
}
elseif ($_SESSION["autenticado"] == "SI" || $_SESSION["autenticadoAdmin"] != "SI") 
{
    $_SESSION["noautenticado"] = "NO";
    $_SESSION["autenticado"] = "SI";
    $_SESSION["autenticadoAdmin"] = "NO";
}
elseif ($_SESSION["autenticado"] != "SI" || $_SESSION["autenticadoAdmin"] == "SI") 
{
    $_SESSION["noautenticado"] = "NO";
    $_SESSION["autenticado"] = "NO";
    $_SESSION["autenticadoAdmin"] = "SI";
}
?>

<html lang="es">
<link href="favicon.png" rel="icon" type="image/png"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/info.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/favicon.png" rel="icon" type="image/png" />

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
            <div class="contenedor">    <br><br><br>
                <?php include("barraSupNoLog.php"); ?>
            </div>
        </header>

        <div class="container">

            <h1>Formulario</h1>
            <p>Llena los datos que se solicitan dentro de los cuadros de texto</p><br>
                <form>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="idApellido">Apellido: </label>
                            <input type="text" class="form-control" id="idApellido" placeholder="Tu apellido">
                        </div>
                        <div class="form-group">
                            <label for="idNombre">Nombre: </label>
                            <input type="text" class="form-control" id="idNombre" placeholder="Tu nombre">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="idNoControl">Numero de control: </label>
                            <input type="text" class="form-control" id="idNnoControl" placeholder="12345678">
                        </div>
                    </div>
                    <div class="col-md-12">
                    <label for="idInfoExtra">Información adicional: </label>
                        <textarea class="form-control" rows="3" id="idInfoExtra" placeholder="Información que deseas añadir..."></textarea>
                        <br>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <br><br>
                </form>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

<?php include("footer.php"); ?>
<?php include("modals.php"); ?>

</html>
