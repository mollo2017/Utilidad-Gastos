@extends('layouts.app')

@section('body_class', 'Product-page')

@section('page', 'Camiones')

@section('title_head', ' - listado de camiones')

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
							<h2 class="title">Listado de camiones</h2>
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
									        		<li class="active"><a href="#"><i class="material-icons">local_shipping</i>Camiones</a></li>
									        		<li><a href="{{ url('/admin/poblation') }}"><i class="material-icons">place</i>Poblaciones</a></li>
									        		<li><a href="{{ url('/admin/trip_facts') }}"><i class="material-icons">developer_board</i>Viajes Pendientes</a></li>
									        		<li><a href="{{ url('/admin/trip_result') }}"><i class="material-icons">poll</i>Resultados</a></li>
									    		</ul>
									    	</div>
										</div>
									</nav>
									@if(session('noty'))
				                        <div class="alert alert-warning">
				                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
				                            </button>
				                            {{ session('noty') }}
				                        </div>
				                    @endif
									<a href="{{ url('/admin/truck/create') }}" class="btn btn-success btn-round"><i class="material-icons">add_comment</i>   Agregar Camión</a>
									<div class="table-responsive">
						                <table class="table table-bordered table-dark">
										    <thead class="bg-info">
										        <tr>
										            <th class="info-title text-center">#</th>
										            <th class="info-title text-center">Numero de camión</th>
										            <th class="info-title text-center">Opciones</th>
										        </tr>
										    </thead>
										    <tbody>
										    	@foreach ($trucks as $t)
										        <tr>
										            <td class="info-title">{{$t->id}}</td>
										            <td class="info-title">{{$t->truck_number}}</td>
										            <td class="info-title" class="td-actions text-right">
										                <form method="post" action="{{ url('/admin/truck/'.$t->id) }}">
										                	@csrf
										                	{{method_field('DELETE')}}
										                <a type="button" href="{{ url('/admin/truck/'.$t->id.'/edit') }}" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
										                    <i class="fa fa-edit"></i>
										                </a>
										                <BUTTON type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
										                    <i class="fa fa-times"></i>
										                </BUTTON>
										            </form>
										            </td>
										        </tr>
										        @endforeach
										    </tbody>
										</table>
									</div>
									{{$trucks->links()}}
									@if($nums == 0)
										<div class="alert alert-warning">
										    <div class="container-fluid">
											  <div class="alert-icon">
												<i class="material-icons">info_outline</i>
											  </div>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true"><i class="material-icons">clear</i></span>
											  </button>
											  <b>Notificación:</b> ¡¡¡wow sin datos para mostrar por el momento!!!   
											  <a class="label label-info" data-toggle="modal" data-target="#myModal">Mas información
											  </a>
										    </div>
										</div>
									@endif
								<!--</div>-->
							</div>
						<!--</div> -->
					</div>
				</div>
			<!--<div class="profile-content">
            </div>-->
        </div>
    @endsection