<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ ('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <title>Reportes COSPOR @yield('title_head')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/bootstrap-clockpicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-clockpicker.min.css') }}" rel="stylesheet" />

</head>
<body class="@yield('body_class')">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand"><a href="/"><font color="white">COSPOR DISTRIBUCIONES S.A DE C.V.</a> / @yield('page')</p>
            </div>
            <!-- Verife if guest or not for the session -->
            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="btn btn-primary btn-xs" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
        <div class="wrapper">
            <!-- Here goes the body of the page with the next sentence -->
                @yield('content')
            
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel" color="000000" >Mas información</h4>
              </div>
              <div class="modal-body" type="text">
                La base de datos por el momento no contiene informacion para esta lista de datos. Los datos 
                empezaran a aparecer una vez que ingrese datos en el sistema, se recomienda regresar al menu 
                <a href="{{ url('/home') }}" style="font-weight: bold">home</a> e iniciar a generar entradas al sistema.
              </div>
              <div class="modal-footer">
                <!--button type="button" class="btn btn-default btn-simple" data-dismiss="modal">cerrar</button-->
                <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">entendido</button>
              </div>
            </div>
          </div>
        </div>
        
</body>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <!-- include of the js file  to do the clock picker -->
    <script type = "text/javascript" src = "{{ asset('js/bootstrap-clockpicker.min.js') }}" > </script>
    <script type="text/javascript">
        $('.clockpicker').clockpicker()
            .find('input').change(function(){
                console.log(this.value);
            });
    </script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>

</html>