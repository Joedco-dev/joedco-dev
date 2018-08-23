<LINK REL=StyleSheet HREF="/css/info.css" TYPE="text/css" MEDIA=screen>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/info.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="/js/script.js"></script>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="{{route('index')}}">
        <img src="/img/favicon.png" alt="" width="23" ></a> <a class="navbar-brand" href="{{route('index')}}">Joedco-dev</a>
        </div>
<div class="navbar-collapse collapse">


        @if (Auth::guest())

        <ul class="nav navbar-nav navbar-left">
        <div id='cssmenu'>
        <ul>
          <li><a href="{{route('tutoriales')}}">Tutoriales</a></li>
          <li><a href="{{route('contacto')}}">Contacto</a></li>
        </ul>
        </div></ul>

        <ul class="nav navbar-nav navbar-right">
        <div id='cssmenu'>
        <ul>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Registrate</a></li>

        </ul>
        </div></ul>

        @else

        <ul class="nav navbar-nav navbar-left">
        <div id='cssmenu'>
        <ul>
          <li><a href="{{route('tutoriales')}}">Tutoriales</a></li>
          <li><a href="{{route('contacto')}}">Contacto</a></li>
          @if (Auth::user()->tipo == 'admin')
            <li><a href="{{route('student_index')}}">Estudiantes</a></li>
          @else
            @if (Auth::user()->tipo == 'Tutor')
              <li><a href="{{ route('student_index') }}">Estudiantes</a></li>
            @elseif (Auth::user()->tipo == 'Alumno')

            @else

            @endif
          @endif
          <li><a href="{{ route('tutorias') }} ">Tutorias ITA</a></li>
        </ul>
        </div></ul>

        <ul class="nav navbar-nav navbar-right">
<div id='cssmenu'>
        <ul>
        @if (Auth::user()->tipo == 'admin')
          <li><a href="{{ route ('student_profile') }} "> {{ Auth::user()->nombre }}</a>
        @elseif (Auth::user()->tipo == '')
          <li><a href="{{ route ('student_profile') }} "> {{ Auth::user()->nombre }}</a>
        @else
          <li><a href="{{ route ('student_profileC', ['carrera' => Auth::user()->carrera]) }} "> {{ Auth::user()->nombre }}</a>
        @endif

              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
               </li>
            </li>
         </ul>
        </div></ul>

        @endif
         </div>
                 </nav>
        </div><!--/.nav-collapse -->
      </div>


    </div>
