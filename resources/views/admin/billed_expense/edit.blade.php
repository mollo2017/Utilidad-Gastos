<!-- Establece que este archivo es una platilla de extención -->
@extends('layouts.app')
<!-- Genera el tipo de pagina que se va a cargar segun las plantillas -->
@section('body_class', 'signup-page')
<!-- Nombre de la ubicacion de la pagina -->
@section('page', 'Viajes')
<!-- Pasa el titulo de la pagina a la plantilla principal -->
@section('title_head', ' - Formulario de datos de viaje')
<!-- Muestra el contenido de esta pagina a la plantilla principal -->
@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ url('/admin/billed_expense/'.$TripFFact->id.'/edit') }}">
                        @csrf
                        <div class="header header-primary text-center">
                            <h2>Viaje pendiente</h2>
                            <div class="social-line">
                                <img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="20%" width="20%"/>
                            </div>
                        </div>
                        <div class="header text-center">
                            <h4>Ingresa los datos</h4>

                        </div>
                        <a href="{{ url('/home') }}" class="btn btn-default btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="top" title="Regresar">
                                <i class="material-icons">navigate_before</i>
                            </a>
                        <div class="content">
                            @if(session('noty'))
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    {{ session('noty') }}
                                </div>
                            @endif
                            <!--  Inicio del formulario
                                ********************************** 
                                            Factores
                                **********************************
                                    'id_route'                  *
                                    'id_truck'                  * 
                                    'id_driver'                 *
                                    'id_carrier1'               * 
                                    'id_carrier2'               *
                                    'id_grocer'                 *
                                    'initial_km'                *
                                    'final_km'                  *
                                    'diessel_quantity_initial'  *
                                    'diessel_quantity_final'    *
                                    'loading_date'              *
                                    'arrival_date'              *
                                    'weight_conteiner'          
                                    'volume'
                                    'trip_amount'
                                    'departure_time'
                                    'arrival_time'
                                ********************************** 
                                            gastos
                                **********************************
                                'foreign_diessel'               *
                                'driver_salary'                 *
                                'driver_food'                   *
                                'carrier1_salary'               * 
                                'carrier1_food'                 *
                                'carrier2_salary'               *
                                'carrier2_food'                 *
                                'tollbooth'                     *
                                'iave_tollbooth'                *
                                'maneuvers'                     *
                                'passages'                      *
                                'permissions'                   *
                                'repairs'                       *
                                'parking'                       *
                                'spare_parts'                   *
                                'mulcts'                        *
                                'cargo_van'                     *
                                'boardinghouse'                 *
                                'agents_commission'             *
                                'other'        
*************************************************************** *
                            -->
                            <!-- total_boxes -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Cantidad de cajas</label>
                                    <input type="number"  step="0.001" class="form-control" name="total_boxes" value="{{$st1}}">
                                </div>
                            </div>
                            <!-- gross_profit -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Utilidad Bruta</label>
                                    <input type="number"  step="0.001" class="form-control" name="gross_profit" value="{{$st2}}">
                                </div>
                            </div>
                            <!-- weight_conteiner -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Peso de carga</label>
                                    <input type="number"  step="0.001" class="form-control" name="weight_conteiner" value="{{$TripFFact->weight_conteiner}}">
                                </div>
                            </div>
                            <!-- volume -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Vulumen carga</label>
                                    <input type="number"  step="0.001" class="form-control" name="volume" value="{{$TripFFact->volume}}">
                                </div>
                                
                            </div>
                            <!-- trip_amount -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Importe viaje</label>
                                    <input type="number"  step="0.001" class="form-control" name="trip_amount" value="{{$TripFFact->trip_amount}}">
                                </div>
                            </div>
                            <!-- departure_time -->
                            <div class="form-group">
                                <div class="clearfix">
                                    <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
                                        <span class="input-group-addon">
                                            <span class="label label-primary">
                                                Partió : 
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" value="{{$TripFFact->departure_time}}" name="departure_time" > 
                                    </div>
                                </div>
                            </div>
                            <!-- arrival_time -->
                            <div class="form-group">
                                <div class="clearfix">
                                    <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
                                        <span class="input-group-addon">
                                            <span class="label label-primary">
                                                Arrivo : 
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" value="13:14" name="arrival_time">
                                    </div>
                                </div>
                            </div>
                            <!--  Rutas -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Ruta : 
                                    </span>
                                </span>
                                <select class="form-control" name="id_route">
                                    <option>{{$Rt}}</option>
                                    @foreach ($ruta as $rt)
                                    <option>{{$rt->route_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Camiones -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="label label-primary">
                                        No. Camión : 
                                    </span>
                                </span>
                                <select class="form-control" name="id_truck">
                                    <option>{{$Tck}}</option>
                                    @foreach ($truck as $tck)
                                    <option>{{$tck->truck_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Fecha de facturado  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="label label-primary">
                                        Fecha facturado :  
                                    </span>
                                </span>
                                <input class="datepicker form-control" type="text" value="{{$fechaff}}" name="loading_date"/>
                            </div>
                            <!--  Fecha de llegada  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="label label-primary">
                                        Fecha llegada :  
                                    </span>
                                </span>
                                <input class="datepicker form-control" type="text" value="03/12/2018" name="arrival_date"/>
                            </div>            
                            <!--  Kilometraje inicial  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Kilometraje inicial</label>
                                    <input type="number"  step="0.001" class="form-control" name="initial_km" value="{{$TripFFact->initial_km}}"/>
                                </div>
                            </div>
                            <!--  Kilometraje final  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons"></i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Kilometraje final</label>
                                    <input type="number" step="0.001" class="form-control" name="final_km">
                                </div>
                            </div>
                            <!--  Diessel inicial  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Litros de diessesl</label>
                                    <input type="number" step="0.001" class="form-control" name="diessel_quantity_initial" value="{{$TripFFact->diessel_quantity_initial}}"/>
                                </div>
                            </div>
                            <!--  Diessel final  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Monto de diessel</label>
                                    <input type="number" step="0.001" class="form-control" name="diessel_quantity_final" value="{{$TripFFact->diessel_quantity_final}}"/>
                                </div>
                            </div>
        <!-- *********************Gastos no facturados ************************************************-->
                            <!--  Chofer -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Chofer : 
                                    </span>
                                </span>
                                <select class="form-control" name="id_driver">
                                    <option>{{$dvr}}</option>
                                    @foreach ($ChoferPeopleses as $Chpls)
                                    <option>{{$Chpls->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Comida chofer  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Comida chofer</label>
                                    <input type="number" step="0.001" class="form-control" name="driver_food">
                                </div>
                            </div>
                            <!--  Sueldo chofer  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Sueldo chofer</label>
                                    <input type="number" step="0.001" class="form-control" name="driver_salary">
                                </div>
                            </div>
                            <!--  Cargardor 1  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Estivador 1 : 
                                    </span>
                                </span>
                                <select class="form-control" name="id_carrier1">
                                    <option>{{$cr1}}</option>
                                    @foreach ($Char1Peopleses as $Chr1pls)
                                    <option>{{$Chr1pls->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Comida Estibador 1  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Comida estivador 1</label>
                                    <input type="number" step="0.001" class="form-control" name="carrier1_food">
                                </div>
                            </div>
                            <!--  Sueldo Estibador 1  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Sueldo estivador 1</label>
                                    <input type="number" step="0.001" class="form-control" name="carrier1_salary">
                                </div>
                            </div>
                            <!--  Cargardor 2  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Estivador 2 : 
                                    </span>
                                </span>
                                <select class="form-control" name="id_carrier2">
                                    <option>{{$cr2}}</option>
                                    @foreach ($Char2Peopleses as $Chr2pls)
                                    <option>{{$Chr2pls->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Comida Estibador 2  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Comida estivador 2</label>
                                    <input type="number" step="0.001" class="form-control" name="carrier2_food">
                                </div>
                            </div>
                            <!--  Sueldo Estibador 2  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Salario estivador 2</label>
                                    <input type="number" step="0.001" class="form-control" name="carrier2_salary">
                                </div>
                            </div>
                            <!--  Bodeguero  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="control-label">
                                    <span class="label label-primary">
                                        Bodeguero : 
                                    </span>
                                </span>
                                <select class="form-control"  name="id_grocer"">
                                    <option>{{$gcr}}</option>
                                    @foreach ($GrocerPeopleses as $Gsrpls)
                                    <option>{{$Gsrpls->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  permisos facturado  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Permisos (facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="permissions1">
                                </div>
                            </div>
                            <!--  permisos no facturado-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Permisos (no facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="permissions2">
                                </div>
                            </div>
                            <!--  pension  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Pension</label>
                                    <input type="number" step="0.001" class="form-control" name="boardinghouse">
                                </div>
                            </div>
                            <!--  estacionamiento  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Estacionamiento</label>
                                    <input type="number" step="0.001" class="form-control" name="parking">
                                </div>
                            </div>
                            <!--  fletes (camioneta) facturado  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Flete (facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="cargo_van1">
                                </div>
                            </div>
                            <!--  fletes (camioneta) no facturado -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Flete (no facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="cargo_van2">
                                </div>
                            </div>
                            <!--  maniobras  facturado-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Maniobras (facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="maneuvers1">
                                </div>
                            </div>
                            <!--  maniobras  no facturado-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Maniobras (no facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="maneuvers2">
                                </div>
                            </div>
                            <!--  talacha facturado -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Reparaciones (talacha)(facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="repairs1">
                                </div>
                            </div>
                            <!--  talacha  no facturado-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Reparaciones (talacha)(no facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="repairs2">
                                </div>
                            </div>
                            <!--  otros facturado-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Otros (facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="other1">
                                </div>
                            </div> 
                            <!--  otros  no facturado-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Otros (no facturado)</label>
                                    <input type="number" step="0.001" class="form-control" name="other2">
                                </div>
                            </div> 
                            <!--  multas  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Multas</label>
                                    <input type="number" step="0.001" class="form-control" name="mulcts">
                                </div>
                            </div>
     <!-- *********************Gastos facturados ************************************************-->
                            <!--  Diessel faraneo  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Diessel foraneo</label>
                                    <input type="number" step="0.001" class="form-control" name="foreign_diessel">
                                </div>
                            </div>
                            <!--  hospedaje  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Hospedaje</label>
                                    <input type="number" step="0.001" class="form-control" name="hostage">
                                </div>
                            </div>
                            <!--  Vulcanizadora  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Vulcanizadora</label>
                                    <input type="number" step="0.001" class="form-control" name="vulcanizer">
                                </div>
                            </div>
                            <!--  Casetas  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Casetas</label>
                                    <input type="number" step="0.001" class="form-control" name="tollbooth">
                                </div>
                            </div>
                            <!--  Casetas IAVE  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Casetas IAVE</label>
                                    <input type="number" step="0.001" class="form-control" name="iave_tollbooth">
                                </div>
                            </div>
                            <!--  refacciones  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Refacciones</label>
                                    <input type="number" step="0.001" class="form-control" name="spare_parts">
                                </div>
                            </div>
                            <!--  pasajes -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Pasajes</label>
                                    <input type="number" step="0.001" class="form-control" name="passages">
                                </div>
                            </div>
                            <!--  comision del agente  -->
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Comisión agente</label>
                                    <input type="number" step="0.001" class="form-control" name="agents_commission">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <div class="footer text-center">
                                    <a href="{{ url('/admin/trip_facts') }}" class="btn btn-danger btn-lg">Cancelar</a>
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
    @include('includes.footer')
</div> 

@endsection