@extends('layouts.app')

@section('body_class', 'signup-page')

@section('page', 'Inicio de sesión')

@section('title_head', ' - Inicio de sesión')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header header-primary text-center">
                            <h4>Inicio de sesión</h4>
                            <div class="social-line">
                                <!--<a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>-->
                                <img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="50%" width="50%"/>
                            </div>
                        </div>
                        <p class="text-divider">Ingresa tus datos</p>
                        <div class="content">

                           <!-- <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nombre de usuario">
                            </div> -->

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" placeholder="Contraseña" class="form-control" name="password" required>
                            </div>

                            <!-- If you want to add a checkbox to this form, uncomment this code-->

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordarme
                                </label>
                            </div> 
                        </div>
                        <div class="footer text-center">
                            <BUTTON class="btn btn-primary btn-lg" type="submit">Ingresar</BUTTON>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</div>
@endsection
