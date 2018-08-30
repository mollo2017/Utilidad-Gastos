<!-- Establece que este archivo es una platilla de extención -->
@extends('layouts.app')
<!-- Genera el tipo de pagina que se va a cargar segun las plantillas -->
@section('body_class', 'signup-page')
<!-- Nombre de la ubicacion de la pagina -->
@section('page', 'Inicio')
<!-- Pasa el titulo de la pagina a la plantilla principal -->
@section('title_head', ' - Bienvenido!')
<!-- Muestra el contenido de esta pagina a la plantilla principal -->
@section('content')
<!-- Pagina principal del sistema, o también la pagina de bienvenida -->
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <div class="header header-primary text-center">
                        <h3>Bienvenido</h3>
                        <div class="social-line">
                            <img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="50%" width="50%" />
                        </div>
                    </div>
                    <p class="text-divider">"Reportes, Gastos y utilidad para COSPOR"</p>
                    <div class="content">
                        <h4>Este sencillo software te facilitara las herramientas para gestionar los gastos y realizar reportes por empleado</h4>
                    </div>
                    <div class="col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <a href="{{ url('/home') }}" class="btn btn-success btn-round">
                            <i class="material-icons">input</i> Comenzar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</div>
@endsection