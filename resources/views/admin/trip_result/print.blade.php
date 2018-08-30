<!-- Establece que este archivo es una platilla de extención -->
@extends('layouts.app')
<!-- Genera el tipo de pagina que se va a cargar segun las plantillas -->
@section('body_class', 'Product-page')
<!-- Nombre de la ubicacion de la pagina -->
@section('page', 'Resultados')
<!-- Pasa el titulo de la pagina a la plantilla principal -->
@section('title_head', ' - Listado de los resultados de viaje')
<!-- Muestra el contenido de esta pagina a la plantilla principal -->
@section('content')
<div class="main main-raised">
    <div class="container">
    	<div class="contenedormidle">
    		<div class="section text-center">
				<h6>COSPOR DISTRIBUCIONES SA DE CV<br>
				CONTROL DE VIATICOS ISU 1501</h6>
	    		<table height: 100px;>
				   <tr><!--Encabezado-->
				       <td>
				       		<img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="8%" width="30%" /></td>
				       <td>
					       	<input type="text" value="fecha:" class="enjoy-csse" />
					       	<input type="text" value="{{$ftfct->loading_date}}"  class="enjoy-css" />
						</td>
						
				   </tr>
				   <tr><!--Encabezado-->
				       <td>
				       <td>
					       	<input type="text" value="Rendimiento diessel:" class="enjoy-csse" />
					       	<input type="text" value=""  class="enjoy-css" />
						</td>
						
				   </tr><!--Fin encabezado--><!--Fin encabezado-->
				   <!--datos-->
				   <tr>
				       <td>
					       	<input type="text" value="Nombre:" class="enjoy-css0" />
						</td>
				       <td colspan="2">
				       		<input type="text" value="{{$dvr}}" class="enjoy-css2" />
				       </td>
				   </tr>
				   <tr>
				       <td>
					       	<input type="text" value="Poblaciones visitadas:" class="enjoy-css0" />
						</td>
				       <td colspan="2">
				       		<select class="enjoy-css2" >
                                    @foreach ($ArrayPbls as $rt)
                                    <option>{{$rt}}</option>
                                    @endforeach
                                </select>
				       </td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="Hora de salida:" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$ftfct->departure_time}}" class="enjoy-css2" />
				       </td>
				   </tr>
				   <tr>
				       <td>
				       	<input type="text" value="Hora de llegada:" class="enjoy-css0" />
				       </td>
				       <td colspan="2">
				       		<input type="text" value="{{$ftfct->arrival_time}}" class="enjoy-css2" />
				       </td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="COMIDA CHOFER"  class="enjoy-css0" />
				       </td>
				       <td colspan="2">
							<input type="text" value="{{$GnF->driver_food}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
							<input type="text" value="Comida est. {{$cr1}}" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" value="{{$GnF->carrier1_food}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
							<input type="text" value="Comida est. {{$cr1}}" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" class="enjoy-css2" value="{{$GnF->carrier2_food}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
							<input type="text" value="Permiso" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" class="enjoy-css2" value="{{$GnF->permissions}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="ESTACIONAMIENTO " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" class="enjoy-css2" value="{{$GnF->parking}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="FLETES " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" class="enjoy-css2" value="{{$GnF->cargo_van}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="FLETES " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" class="enjoy-css2" value="{{$GnF->permissions}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="MANIOBRAS " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" class="enjoy-css2" value="{{$GnF->maneuvers}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="TALACHA " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" class="enjoy-css2" value="{{$GnF->repairs}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="OTROS " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" class="enjoy-css2" value="{{$GnF->other}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="MULTA " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" class="enjoy-css2" value="{{$GnF->mulcts}}"/>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="IMPORTE " class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		
				       <td>
					       	<input type="text" value="total" class="enjoy-csse" />
					       	<input type="text" value="" class="enjoy-css" />
						</td>
				   </tr>
				   <tr>
				       <td>
				       		<div class="enjoy-cssdiv">ESTIBADOR</div>
				       	</td>
				       <td colspan="2">
				       		<div class="enjoy-cssdiv">ESTIBADOR</div>
				       	</td>
				   </tr>
				   <tr>
				       <td>
					       	<input type="text" value="total general" class="enjoy-cssiz" />
						</td>
				       <td>
					       	<input type="text" value=""  class="enjoy-cssdr" />
						</td>
						<td>
						</td>
				   </tr>
				   <tr>
				       <td>
				       		<div class="enjoy-cssdiv">AUTORIZO</div>
				       	</td>
				       <td colspan="2">
				       		<div class="enjoy-cssdiv">FIRMA CHOFER</div>
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		
				       	</td>
				       	<td>
				       		<div class="enjoy-cssdiv">BODEGUERO</div>
				       	</td>
				       <td>
				       		
				       	</td>
				   </tr>
				</table>
			</div>
		</div>
		<div class="contenedormidle">
			<div class="section text-center">
				<h6>COSPOR DISTRIBUCIONES SA DE CV<br>
				CONTROL DE VIATICOS ISU 1501</h6>
				<table height: 100px;>
				   <tr><!--Encabezado-->
				       <td>
				       		<img src="{{ asset('img/logo-cospor.png') }}" class="img-rounded" height="8%" width="30%" /></td>
				       <td>
					       	<input type="text" value="fecha:" class="enjoy-css0" />
						</td>
				       <td>
					       	<input type="text" value="{{$ftfct->loading_date}}" class="enjoy-css" />
						</td>
				   </tr><!--Fin encabezado-->
				   <!--datos-->
				   <tr>
				       <td>
					       	<input type="text" value="Nombre:" class="enjoy-css0" />
						</td>
				       <td colspan="2">
				       		<input type="text" value="{{$cr1}}" class="enjoy-css2" />
				       </td>
				   </tr>
				   <tr>
				       <td>
					       	<input type="text" value="Poblaciones visitadas:" class="enjoy-css0" />
						</td>
				       <td colspan="2">
				       		<select class="enjoy-css2" >
                                    @foreach ($ArrayPbls as $rt)
                                    <option>{{$rt}}</option>
                                    @endforeach
                                </select>
				       </td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="Hora de salida:" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$ftfct->departure_time}}" class="enjoy-css2" />
				       </td>
				   </tr>
				   <tr>
				       <td>
				       	<input type="text" value="Hora de llegada:" placeholder="Nombre2:" class="enjoy-css0" />
				       </td>
				       <td colspan="2">
				       		<input type="text" value="{{$ftfct->arrival_time}}" class="enjoy-css2" />
				       </td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="Comidas"  class="enjoy-css0" />
				       </td>
				       <td colspan="2">
							<input type="text" value="" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
							<input type="text" value="Combustible" placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" value="{{$Gf->foreign_diessel}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
							<input type="text" value="Permiso" placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" value="{{$Gf->permissions}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
							<input type="text" value="Hospedaje" placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" value="{{$Gf->hostage}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="FLETES" placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$Gf->cargo_van}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="Vulcanizadora " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$Gf->vulcanizer}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="Reparacion - Mantenimiento " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$Gf->repairs}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="CASETAS " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
							<input type="text" value="{{$Gf->tollbooth}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="CASETAS IAVE " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$Gf->iave_tollbooth}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="MANIOBRAS " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$Gf->maneuvers}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="Refacciones " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$Gf->spare_parts}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="OTROS " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="{{$Gf->other}}" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				       <td>
				       		<input type="text" value="IMPORTE " placeholder="" class="enjoy-css0" />
				       	</td>
				       <td colspan="2">
				       		<input type="text" value="" class="enjoy-css2" />
				       	</td>
				   </tr>
				   <tr>
				   		<td>
				       		
				       <td>
					       	<input type="text" value="total" class="enjoy-csse2" />
					       	<input type="text" value="" class="enjoy-css" />
						</td>
				   </tr>
				   <tr>
				       <td>
				       		<div class="enjoy-cssdiv2">AUTORIZO</div>
				       	</td>
				       <td colspan="2">
				       		<div class="enjoy-cssdiv2">FIRMA CHOFER</div>
				       	</td>
				   </tr>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection