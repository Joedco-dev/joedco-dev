<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<link href="/img/favicon.png" rel="icon" type="image/png"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Joedco-dev</title>

    <!-- Styles -->
</head>
<body>
    <div id="app">
     <div class="contenedor">

    @include('_barra')

    <br><br><br><br><br>

        @yield('content')
    </div>

    <!-- Scripts -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
