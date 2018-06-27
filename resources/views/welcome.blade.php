@extends('layouts.app')

@section('body_class', 'signup-page')

@section('page', 'Inicio')

@section('title_head', ' - Bienvenido!')

@section('content')
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
<!--

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
    </div>
</div>-->
@endsection
<!--<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>     
    </body>
</html>-->
