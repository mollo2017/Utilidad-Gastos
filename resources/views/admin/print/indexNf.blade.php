@extends('layouts.app')

@section('body_class', 'Product-page')

@section('page', 'Gastos')

@section('title_head', ' - listado de gastos no facturados')

@section('content')
												<!-- '{{ asset('img/city.jpg')}}' -->
		<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450'); width: 100 %;background-size: cover; background-position: top center;">
		</div>
		<div class="main main-raised">
	            <div class="container">
	                <div class="section text-center">
						<!--<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3", conteiner> -->
							<h2 class="title">Listado de gastos No facturados</h2>
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
													<li><a href="{{ url('/admin/print') }}"><i class="material-icons">monetization_on</i>Facturado </a></li>
									        		<li class="active"><a href="#"><i class="material-icons">money_off</i>No facturado</a></li>
									    		</ul>
									    	</div>
										</div>
									</nav>
									<form class="form-inline" method="POST" action="{{ url('/admin/print/vsearch1') }}">
                        				@csrf
						                	<a href="{{ url('/home') }}" class="btn btn-default btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="left" title="Regresar al menu">
						                        <i class="material-icons">navigate_before</i>
						                    </a>
			                                
			                                <i class="material-icons">event</i>
			                                
			                                <input class="datepicker form-control" type="text" value="03/12/2018"/ name="f_date">
			                                
					                        <button class="btn btn-primary btn-round" type="submit">Buscar por fecha</button>
					                       
									</form>
									<div class="table-responsive">
						                <table class="table table-bordered table-dark">
										    <thead class="bg-danger">
										        <tr>
										            <th class="info-title">#</th>
										            <th class="info-title">FechaFacturado</th>
										            <th class="info-title">Diessel foraneo</th>
										            <th class="info-title">Salario del chofer</th>
										            <th class="info-title">Comida del chofer</th>
										            <th class="info-title">Salario del cargador1</th>
										            <th class="info-title">Comida del cargador1</th>
										            <th class="info-title">Salario del cargador2</th>
										            <th class="info-title">Comida del cargador2</th>
										            <th class="info-title">Casetas</th>
										            <th class="info-title">Casetas IAVE</th>
										            <th class="info-title">Maniobras</th>
										            <th class="info-title">Pasajes</th>
										            <th class="info-title">Permisos</th>
										            <th class="info-title">Reparaciones</th>
										            <th class="info-title">Estacionamiento</th>
										            <th class="info-title">Refacciones</th>
										            <th class="info-title">Multas</th>
										            <th class="info-title">Camioneta</th>
										            <th class="info-title">Pensión</th>
										            <th class="info-title">Comición de agente</th>
										            <th class="info-title">Otros</th>
										            <th class="info-title">Gasto total</th>
										            <th class="info-title">Opciones</th>
										        </tr>
										    </thead>
										    <tbody>
										    	@foreach ($notBilledses as $index => $notbilled)
										        <tr>
										            <td class="info-title">{{$notbilled->id}}</td>
										            <td class="info-title" data-currency="MXN">{{$Arrayfac[$index]}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->foreign_diessel}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->driver_salary}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->driver_food}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->carrier1_salary}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->carrier1_food}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->carrier2_salary}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->carrier2_food}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->tollbooth}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->iave_tollbooth}}</td>
										            <td class="info-title" data-currency="MXN">{{$notbilled->maneuvers}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->passages}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->permissions}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->repairs}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->parking}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->spare_parts}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->mulcts}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->cargo_van}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->boardinghouse}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->agents_commission}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->other}}</td>
													<td class="info-title" data-currency="MXN">{{$notbilled->totalsum}}</td>
										            <td class="info-title" class="td-actions text-right">
										                
										                <button type="button" rel="tooltip" title="Imprimir" class="btn btn-success btn-simple btn-xs" data-placement="right">
										                    <i class="fa fa-print"></i>
										                </button>
										            </td>
										        </tr>
										        @endforeach
										    </tbody>
										</table>
									</div>	
								</div>
								{{$notBilledses->links()}}
								<!--</div>-->
							</div>
						<!--</div> -->
					</div>
				</div>
			<!--<div class="profile-content">
            </div>-->

    @endsection