<!-- Establece que este archivo es una platilla de extención -->
@extends('layouts.app')
<!-- Genera el tipo de pagina que se va a cargar segun las plantillas -->
@section('body_class', 'Product-page')
<!-- Nombre de la ubicacion de la pagina -->
@section('page', 'Rutas')
<!-- Pasa el titulo de la pagina a la plantilla principal -->
@section('title_head', ' - listado de rutas')
<!-- Muestra el contenido de esta pagina a la plantilla principal -->
@section('content')
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450'); width: 100 %;background-size: cover; background-position: top center;">
	</div>
	<div class="main main-raised">
        <div class="container">
        	<a href="{{ url('/home') }}" class="btn btn-default btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="top" title="Regresar al menu">
                <i class="material-icons">navigate_before</i>
            </a>
            <div class="section text-center">
				<h2 class="title">Listado de rutas</h2>
				<div class="team">
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
					        		<li class="active"><a href="#"><i class="material-icons">directions</i>Rutas</a></li>
					        		<li><a href="{{ url('/admin/person') }}"><i class="material-icons">person_pin</i>Personal</a></li>
					        		<li><a href="{{ url('/admin/truck') }}"><i class="material-icons">local_shipping</i>Camiones</a></li>
					        		<li><a href="{{ url('/admin/poblation') }}"><i class="material-icons">place</i>Poblaciones</a></li>
					        		<li><a href="{{ url('/admin/trip_facts') }}"><i class="material-icons">developer_board</i>Viajes Pendientes</a></li>
					        		<li><a href="{{ url('/admin/trip_result') }}"><i class="material-icons">poll</i>Resultados</a></li>
					    		</ul>
					    	</div>
						</div>
					</nav>
					<a href="{{ url('/admin/route/create') }}" class="btn btn-success btn-round"><i class="material-icons">add_comment</i>   Agregar Ruta</a>
					<div class="table-responsive">
		                <table class="table table-bordered table-dark">
						    <thead class="bg-warning">
						        <tr>
						            <th class="info-title text-center">#</th>
						            <th class="info-title text-center">Numero de ruta</th>
						            <th class="info-title text-center">Poblaciones</th>
						            <th class="info-title text-center">Opciones</th>
						        </tr>
						    </thead>
						    <tbody>
						    	@foreach ($routs as $index => $rt)
						        <tr>
						            <td class="info-title">{{$rt->id}}</td>
						            <td class="info-title"">{{$rt->route_number}}</td>
						            <td class="info-title"">{{$ArrayPbls[$index]}}</td>
						            <td class="info-title" class="td-actions text-right">
						                <form method="post" action="{{ url('/admin/route/'.$rt->id) }}">
						                	@csrf
						                	{{method_field('DELETE')}}
							                <a type="button" href="{{ url('/admin/route/'.$rt->id.'/edit') }}" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
							                    <i class="fa fa-edit"></i>
							                </a>
							                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
							                    <i class="fa fa-times"></i>
							                </button>
							            </form>   
						            </td>
						        </tr>
						        @endforeach
						    </tbody>
						</table>
					</div>
					{{$routs->links()}}
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
				</div>
			</div>
		</div>
    </div>
@endsection