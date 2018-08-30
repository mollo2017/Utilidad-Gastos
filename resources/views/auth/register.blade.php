<!-- Establece que este archivo es una platilla de extención -->
@extends('layouts.app')
<!-- Genera el tipo de pagina que se va a cargar segun las plantillas -->
@section('body_class', 'signup-page')
<!-- Nombre de la ubicacion de la pagina -->
@section('page', 'Pagina de registro')
<!-- Pasa el titulo de la pagina a la plantilla principal -->
@section('title_head', ' - Registro')
<!-- Muestra el contenido de esta pagina a la plantilla principal -->
@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="header header-primary text-center">
                            <h4>Regsitro</h4>
                            <div class="social-line">
                                <img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="50%" width="50%"/>
                            </div>
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">

                           <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nombre de usuario" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </div>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" placeholder="contraseña" class="form-control" name="password" required data-toggle="tooltip" data-placement="right" title="La contraseña debe de contener al menos 8 caracteres entre los cuales incluir alfanumericos y especiales">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation" required>
                            </div>

                        </div>
                        <div class="footer text-center">
                            <BUTTON class="btn btn-primary btn-lg" type="submit">Registrar</BUTTON>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</div>
@endsection
