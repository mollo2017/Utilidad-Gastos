@extends('layouts.app')

@section('body_class', 'signup-page')

@section('page', 'Tareas')

@section('title_head', ' - Tablero de taras')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <div class="header header-primary text-center">
                        <h3>Bienvenido</h3>
                        <div class="social-line">
                            <img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="20%" width="20%" />
                        </div>
                    </div>
                    <p class="text-divider">Reportes, Gastos y utilidad para COSPOR</p>
                    <div class="col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <a href="{{ url('/admin/billed_expense/create') }}" class="btn btn-success btn-round" data-toggle="tooltip" data-placement="right" title="Formulario - nuevo viaje">
                            <i class="material-icons">add_comment</i>Generar nuevo
                        </a>
                        
                        <a href="{{ url('/admin/billed_expense') }}" class="btn btn-info btn-round" data-toggle="tooltip" data-placement="right" title="Mostar info de datos">
                            <i class="material-icons">business_center</i> Revisar datos
                        </a>

                        <a href="{{ url('/admin/trip_result') }}" class="btn btn-primary btn-round" data-toggle="tooltip" data-placement="right" title="Revisar los datos e imprimir">
                            <i class="material-icons">print</i> Imprimir reporte
                        </a>
                        <a href="{{ url('/welcome') }}" class="btn btn-default btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="bottom" title="Regresar">
                            <i class="material-icons">navigate_before</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer') 
</div> 
 
@endsection