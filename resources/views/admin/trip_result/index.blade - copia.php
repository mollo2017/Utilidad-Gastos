@extends('layouts.app')

@section('body_class', 'Product-page')

@section('page', 'Resultados')

@section('title_head', ' - Listado de los resultados de viaje')

@section('content')<!--
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450'); width: 100 %;background-size: cover; background-position: top center;">
</div>
<a href="{{ url('/home') }}" class="btn btn-default btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="top" title="Regresar al menu">
            <i class="material-icons">navigate_before</i>
        </a>-->
<div class="main main-raised">
    <div class="container">
    	<div class="contenedormidle">
    		<div class="section text-center">
				<h4>COSPOR DISTRIBUCIONES SA DE CV<br>
				CONTROL DE VIATICOS ISU 1501</h4>
	    		<table>
				   <tr><!--Encabezado-->
				       <td>
				       		<img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="12%" width="40%" /></td>
				       <td>
				       		<input type="text" value="" placeholder="Fecha" class="form-control" />
				       </td>
				       <td>
						    <input type="text" value="" placeholder="Regular" class="form-control" />
						</td>
				   </tr><!--Fin encabezado-->
				   <!--datos-->
				   <tr>
				       <td><input type="text" value="" placeholder="Nombre:" class="form-control" /></td>
				       <td colspan="2"><input type="text" value="" placeholder="Jorge" class="form-control" /></td>
				   </tr>
				   <tr>
				       <td><input type="text" value="" placeholder="Hora de salida:" class="form-control" /></td>
				       <td colspan="2"><input type="text" value="" placeholder="7:00 am" class="form-control" /></td>
				   </tr>
				   <tr>
				       <td><input type="text" value="" placeholder="Hora de llegada:" class="form-control" /></td>
				       <td colspan="2"><input type="text" value="" placeholder="9:43 pm" class="form-control" /></td>
				   </tr>
				   <tr>
				       <td><input type="text" value="" placeholder="COMIDA CHOFER." class="form-control" /></td>
				       <td colspan="2"><input type="text" value="" placeholder="50" class="form-control" /></td>
				   </tr>
				   <tr>
				       <td><input type="text" value="" placeholder="Est." class="form-control" /></td>
				       <td colspan="2"><input type="text" value="" placeholder="50" class="form-control" /></td>
				   </tr>
				   <tr>
				       <td><input type="text" value="" placeholder="Est." class="form-control" /></td>
				       <td colspan="2"><input type="text" value="" placeholder="50" class="form-control" /></td>
				   </tr>
				</table>

			</div>
		</div>
		<div class="contenedormidle">

		</div>
	</div>
</div>

@endsection