@extends('layouts.app')

@section('body_class', 'signup-page')

@section('page', 'Personal')

@section('title_head', ' - Modificar Personal')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ url('/admin/person/'.$people->id.'/edit') }}">
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
                            <!-- name -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre</label>
                                    <input type="text" class="form-control" placeholder="" name="name" value="{{$people->name}}">
                                </div>
                            </div>
                            <!-- roll -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        roll : 
                                    </span>
                                </span>
                                <select class="form-control" name="roll">
                                    <option>{{$people->roll}}</option>
                                    <option>chofer</option>
                                    <option>cargador</option>
                                    <option>bodeguero</option>
                                </select>
                            </div> 
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <div class="footer text-center">
                                    <a class="btn btn-danger btn-lg" type="button" href="{{ url('/admin/person') }}">Cancelar</a>
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