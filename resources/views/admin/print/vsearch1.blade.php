
@extends('layouts.app')

@section('body_class', 'Product-page')

@section('page', 'Gastos')

@section('title_head', ' - listado de gastos facturados')

@section('content')
												<!-- '{{ asset('img/city.jpg')}}' -->
		<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450'); width: 100 %;background-size: cover; background-position: top center;">
		</div>
		<div class="main main-raised">
	            <div class="contenedormidle">
	            		<div class="col-sm-4">
							<div class="form-group">
						    	<input type="text" value="{{$billedExpenses->id}}" placeholder="Regular" class="form-control" />
							</div>
						</div>
				</div>
				<div class="contenedormidle">

				</div>
			<!--<div class="profile-content">
            </div>-->
        </div>
    @endsection