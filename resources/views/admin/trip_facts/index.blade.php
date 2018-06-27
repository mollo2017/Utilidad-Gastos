@extends('layouts.app')

@section('body_class', 'Product-page')

@section('page', 'Factores')

@section('title_head', ' - listado de Factores de viaje')

@section('content')
												<!-- '{{ asset('img/city.jpg')}}' -->
		<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450'); width: 100 %;background-size: cover; background-position: top center;">
		</div>
		<div class="main main-raised">
	            <div class="container">
	            	<a href="{{ url('/home') }}" class="btn btn-default btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="top" title="Regresar al menu">
                        <i class="material-icons">navigate_before</i>
                    </a>
	                <div class="section text-center">
						<!--<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3", conteiner> -->
							<h2 class="title">Listado de factores de viaje</h2>
							<div class="team">
								<!--<div class="row">-->
									<nav class="navbar navbar-info" role="navigation">
										<div class="container-fluid">
											<div class="navbar-header">
									    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									                <span class="sr-only">Toggle navigation</span>
									                <span class="icon-bar"></span>
									                <span class="icon-bar"></span>
									                <span class="icon-bar"></span>
									    		</button>
									    	</div>
									    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									    		<ul class="nav navbar-nav">
													<li><a href="{{ url('/admin/billed_expense') }}"><i class="material-icons">monetization_on</i>Facturado </a></li>
									        		<li><a href="{{ url('/admin/not_billed_expense') }}"><i class="material-icons">money_off</i>No facturado</a></li>
									        		<li><a href="{{ url('/admin/route') }}"><i class="material-icons">directions</i>Rutas</a></li>
									        		<li><a href="{{ url('/admin/person') }}"><i class="material-icons">person_pin</i>Personal</a></li>
									        		<li><a href="{{ url('/admin/truck') }}"><i class="material-icons">local_shipping</i>Camiones</a></li>
									        		<li><a href="{{ url('/admin/poblation') }}"><i class="material-icons">place</i>Poblaciones</a></li>
									        		<li class="active"><a href="#"><i class="material-icons">developer_board</i>Viajes Pendientes</a></li>
									        		<li><a href="{{ url('/admin/trip_result') }}"><i class="material-icons">poll</i>Resultados</a></li>
									    		</ul>
									    	</div>
										</div>
									</nav>
									<div class="table-responsive">
						                <table class="table table-bordered table-dark">
										    <thead class="bg-info">
										        <tr>
										            <th class="info-title">#</th>
										            <th class="info-title">Numero de ruta</th>
										            <th class="info-title">Numero de camión</th>
										            <th class="info-title">Chofer</th>
										            <th class="info-title">Cargador 1</th>
										            <th class="info-title">Cargador 2</th>
										            <th class="info-title">Bodeguero</th>
										            <th class="info-title">Kilometraje inicial</th>
										            <th class="info-title">Kilometraje final</th>
										            <th class="info-title">Litros Diessel</th>
										            <th class="info-title">Monto diessel</th>
										            <th class="info-title">Fecha de facturacion</th>
										            <th class="info-title">Fecha de llegada</th>
										            <th class="info-title">Peso de carga</th>
										            <th class="info-title">Volumen</th>
										            <th class="info-title">Importe del viaje ($)</th>
										            <th class="info-title">Hora de salida</th>
										            <th class="info-title">Hora de llegada</th>
										            <th class="info-title">opciones</th>
										        </tr>
										    </thead>
										    <tbody>
										    	@foreach ($factstrips as $index => $factstrip)
										        <tr>
										            <td class="info-title">{{$factstrip->id}}</td>
										            <td class="info-title" data-currency="MXN">{{$ArrayRoutes[$index]}}</td>
										            <td class="info-title" data-currency="MXN">{{$ArrayTruks[$index]}}</td>
										            <td class="info-title" data-currency="MXN">{{$Arraychof[$index]}}</td>
										            <td class="info-title" data-currency="MXN">{{$Arrayc1[$index]}}</td>
										            <td class="info-title" data-currency="MXN">{{$Arrayc2[$index]}}</td>
										            <td class="info-title" data-currency="MXN">{{$ArrayB[$index]}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->initial_km}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->final_km}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->diessel_quantity_initial}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->diessel_quantity_final}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->loading_date}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->arrival_date}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->weight_conteiner}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->volume}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->trip_amount}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->departure_time}}</td>
										            <td class="info-title" data-currency="MXN">{{$factstrip->arrival_time}}
										            </td>
													
										            <td class="info-title" class="td-actions text-right">
										            	<a type="button" href="{{ url('/admin/billed_expense/'.$factstrip->id.'/edit') }}" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
										                    <i class="fa fa-edit"></i>
										                </a></td>
										        </tr>
										        @endforeach
										    </tbody>
										</table>
									</div>
									{{$factstrips->links()}}
								<!--</div>-->
							</div>
						<!--</div> -->
					</div>
				</div>
			<!--<div class="profile-content">
            </div>-->
        </div>
    @endsection
    <?php
	function getdatos($dato){
        $texto="";
        $texto=str_replace('"','',$dato);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
        $dato=$texto;
        return $dato;
	}
?>