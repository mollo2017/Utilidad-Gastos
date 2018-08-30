<!-- Establece que este archivo es una platilla de extención -->
@extends('layouts.app')
<!-- Genera el tipo de pagina que se va a cargar segun las plantillas -->
@section('body_class', 'signup-page')
<!-- Nombre de la ubicacion de la pagina -->
@section('page', 'Rutas')
<!-- Pasa el titulo de la pagina a la plantilla principal -->
@section('title_head', ' - Modificar ruta')
<!-- Muestra el contenido de esta pagina a la plantilla principal -->
@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ url('/admin/route/'.$routs->id.'/edit') }}">
                        @csrf
                        <div class="header header-primary text-center">
                            <h2>Modificación</h2>
                            <div class="social-line">
                                <img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="20%" width="20%"/>
                            </div>
                        </div>
                        <div class="header text-center">
                            <h4>Modifica los datos</h4>
                        </div>
                        <div class="content">
                            <!-- no. ruta -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">No. de ruta</label>
                                    <input type="number" class="form-control" name="route_number" value="{{$routs->route_number}}">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <div class="footer text-center">
                                    <a class="btn btn-danger btn-lg" type="button" href="{{ url('/admin/route') }}">Cancelar</a>
                                </div>
                            </span>
                            <span class="input-group-addon">
                                <div class="footer text-center">
                                    <BUTTON class="btn btn-success btn-lg" type="submit">Guardar</BUTTON>
                                </div>
                            </span>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection