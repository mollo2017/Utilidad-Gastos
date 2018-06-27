@extends('layouts.app')

@section('body_class', 'signup-page')

@section('page', 'Poblaciones')

@section('title_head', ' - Agregar poblaciones')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ url('/admin/poblation') }}">
                        @csrf
                        <div class="header header-primary text-center">
                            <h2>Nueva pobación</h2>
                            <div class="social-line">
                                <img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="20%" width="20%"/>
                            </div>
                        </div>
                        <div class="header text-center">
                            <h4>Ingresa los datos</h4>
                        </div>
                        <div class="content">
                            <!-- poblation_name -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre de población</label>
                                    <input type="text" class="form-control" name="poblation_name">
                                </div>
                            </div>
                            <!--  Rutas 1-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Ruta 1: 
                                    </span>
                                </span>
                                <select class="form-control" name="id_route1">
                                    @foreach ($ruta as $rt)
                                    <option>{{$rt->route_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Rutas 2-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Ruta 2: 
                                    </span>
                                </span>
                                <select class="form-control" name="id_route2">
                                    <option></option>
                                    @foreach ($ruta as $rt)
                                    <option>{{$rt->route_number}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <!--  Rutas 3-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Ruta 3: 
                                    </span>
                                </span>
                                <select class="form-control" name="id_route3">
                                    <option></option>
                                    @foreach ($ruta as $rt)
                                    <option>{{$rt->route_number}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <!--  Rutas 3-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Ruta 4: 
                                    </span>
                                </span>
                                <select class="form-control" name="id_route4">
                                    <option></option>
                                    @foreach ($ruta as $rt)
                                    <option>{{$rt->route_number}}</option>
                                    @endforeach
                                </select>
                            </div> 

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <div class="footer text-center">
                                    <a class="btn btn-danger btn-lg" type="button" href="{{ url('/admin/poblation') }}">Cancelar</a>
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