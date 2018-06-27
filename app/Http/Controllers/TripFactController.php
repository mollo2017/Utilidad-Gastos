<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip_Fact;
use App\Route;
use App\Truck;
use App\Person;
use App\Not_Billed_expense;
use App\Billed_expense;

class TripFactController extends Controller
{
    //
    public function index(){
        $factstrips = Trip_Fact::where('ban','<>','1')->paginate(10);
        //****************************************************************
        foreach ($factstrips as $factstrip) {
            $Gfacturadoos = Billed_expense::where('id_trip',$factstrip->id)->first();
            $ArraGfacturadoos [] = $Gfacturadoos;
        }

        //****************************************************************
        foreach ($factstrips as $factstrip) {
            $GnFacturados = Not_Billed_expense::where('id_trip',$factstrip->id)->first();
            $ArraGnFacturados [] = $GnFacturados ;
        }
        //return $ArraGnFacturados[0]->driver_food;
        //****************************************************************
        //********Rutas*********
        $texto="";
        $pp = "";
        $nameses = "";
        $ArrayRoutes ;
        foreach ($factstrips as $factstrip) {
            $pp = $factstrip->id_route;
            $nameses = Route::where('id',$pp)->select('route_number')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $ArrayRoutes[] = $nameses;
        }
        //***************************************************************
        //********Camiones**********
        $texto="";
        $pp = "";
        $nameses = "";
        $ArrayTruks;
        foreach ($factstrips as $factstrip) {
            $pp = $factstrip->id_truck;
            $nameses = Truck::where('id',$pp)->select('truck_number')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('truck_number','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $ArrayTruks[] = $nameses;
        }
        //***************************************************************
        //***********Chofer************
        $texto="";
        $pp = "";
        $nameses = "";
        $Arraychof;
        foreach ($factstrips as $factstrip) {
            $pp = $factstrip->id_driver;
            $nameses = Person::where('id',$pp)->select('name')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('name','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arraychof[] = $nameses;
        }
        //***************************************************************
        //**********Cargador 1****************
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayc1;
        foreach ($factstrips as $factstrip) {
            $pp = $factstrip->id_carrier1;
            $nameses = Person::where('id',$pp)->select('name')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('name','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arrayc1[] = $nameses;
        }
        //***************************************************************
        //**********Cargador 2*************
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayc2;
        foreach ($factstrips as $factstrip) {
            $pp = $factstrip->id_carrier2;
            $nameses = Person::where('id',$pp)->select('name')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('name','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arrayc2[] = $nameses;
        }
        //***************************************************************
        //********-Bodeguero************
        $texto="";
        $pp = "";
        $nameses = "";
        $ArrayB;
        foreach ($factstrips as $factstrip) {
            $pp = $factstrip->id_grocer;
            $nameses = Person::where('id',$pp)->select('name')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('name','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $ArrayB[] = $nameses;
        }
        //***************************************************************
    	return view('admin.trip_facts.index')->with(compact('factstrips','ArrayRoutes','ArrayTruks','Arraychof','Arrayc1','Arrayc2','ArrayB','ArraGfacturadoos','ArraGnFacturados'));//listado
    }
    public function create(){
    	return view('admin.trip_facts.create');//formulario de registro
    }
    public function store(){
    	//registrar el nuevo producto
    }
}
