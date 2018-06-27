<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip_Result;
use App\Trip_Fact;
use App\Poblation;
use App\Not_Billed_expense;
use App\Billed_expense;
use App\Route;
use App\Truck;
use App\Person;
class TripResultController extends Controller
{
    //
    public function index(){
    	$resulttrips = Trip_Result::paginate(10);
        //****************************************************************
        //********fecha*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac ;//arreglo de fecha de facturado
        foreach ($resulttrips as $resulttrip) {
            $pp = $resulttrip->id_trip_fact;
            $nameses = Trip_Fact::where('id',$pp)->select('loading_date')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('loading_date','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arrayfac[] = $nameses;
        }
        //****************************************************************
        //********id_rutas*********
        $texto="";
        $pp = "";
        $rrts = "";
        $Arrayrr;//arreglo de id_route
        foreach ($resulttrips as $resulttrip) {
            $pp = $resulttrip->id_trip_fact;
            $rrts = Trip_Fact::where('id',$pp)->select('id_route')->get();
            $texto=str_replace('"','',$rrts);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('id_route','',$texto);
            $texto=str_replace(':','',$texto);
            $rrts=$texto; 
            $Arrayrr[] = $rrts;
        }
        //****************************************************************
        //********route_numbers*********
            $texto="";
            $pp = "";
            $rrts = "";
            $ArrayRtNbr;
            foreach ($Arrayrr as $index) {
                //$pp = $index;
                $rrts = Route::where('id',$index)->select('route_number')->get();
                $texto=str_replace('"','',$rrts);
                $texto=str_replace('{','',$texto);
                $texto=str_replace('}','',$texto);
                $texto=str_replace('[','',$texto);
                $texto=str_replace(']','',$texto);
                $texto=str_replace('route_number','',$texto);
                $texto=str_replace(':','',$texto);
                $rrts=$texto; 
                $ArrayRtNbr[] = $rrts;
            }
        //****************************************************************
        //********poblacion*********
         $texto="";
            $pp = "";
            $rrts = "";
            $ArrayPn;
            foreach ($Arrayrr as $index) {
                //$pp = $index;
                $rrts = Poblation::where('id',$index)->select('poblation_name')->first();
                $texto=str_replace('"','',$rrts);
                $texto=str_replace('{','',$texto);
                $texto=str_replace('}','',$texto);
                $texto=str_replace('[','',$texto);
                $texto=str_replace(']','',$texto);
                $texto=str_replace('poblation_name','',$texto);
                $texto=str_replace(':','',$texto);
                $rrts=$texto; 
                $ArrayPn[] = $rrts;
            }
            //return $ArrayPn;
        //****************************************************************
    	return view('admin.trip_result.index')->with(compact('resulttrips','Arrayfac','ArrayRtNbr','ArrayPn'));//listado
    }
    public function print($id)
    {
        $tripRR = Trip_Result::find($id);// extraccion de datos finales
        $ids = $tripRR->id_trip_fact;
        $ftfct = Trip_Fact::where("id",$ids)->first();//datos de factores de viajes
        //***************************************************************
        $tfid = $ftfct->id;
        $Gf = Billed_expense::where("id_trip",$tfid)->first();
        $GnF = Not_Billed_expense::where("id_trip",$tfid)->first();

        //***************************************************************
        //id_route
        $ss1 = $ftfct->id_route;
        $Rt = Route::Where('id',$ss1)->select('route_number')->get();
        $texto=str_replace('"','',$Rt);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('route_number','',$texto);
        $texto=str_replace(':','',$texto);
        $Rt=$texto;//numero de ruta guardado
        $texto = "";
        //***************************************************************
        //Poblacion
        $pbls1 ="";
        $pbls2 ="";
        $pbls3 ="";
        $pbls4 ="";
        $pbls5 ="";
        $ArrayPbls;
        //return $ftfct->id_route;
        $poblts1 = Poblation::where('id_route1',$ss1)->select('poblation_name')->get();
        foreach ($poblts1 as $poblt) {
            $ppr = $poblt;
            $texto=str_replace('"','',$ppr);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('poblation_name','',$texto);
            $texto=str_replace(':','',$texto);
            $ppr=$texto; 
            $ArrayPbls [] = $ppr;
            //$pbls1= $pbls1 . " / " . $ppr;
        }
        //$ArrayPbls [] =$pbls1;
        //$pbls5 = $pbls5 . $pbls1;
        $ppr = "";
        $texto = "";
        //***************************************************************************************
        $poblts2 = Poblation::where('id_route2',$ss1)->select('poblation_name')->get();
        foreach ($poblts2 as $poblt2) {
            $ppr = $poblt2;
            $texto=str_replace('"','',$ppr);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('poblation_name','',$texto);
            $texto=str_replace(':','',$texto);
            $ppr=$texto; 
            $ArrayPbls [] = $ppr;
            //$pbls2= $pbls2 . " / " . $ppr;
        }
        //$ArrayPbls [] =$pbls2;
        //$pbls2= "";
        //$pbls5 = $pbls5 . $pbls2;
        $ppr = "";
        $texto = "";
        //***************************************************************************************
        $poblts3 = Poblation::where('id_route3',$ss1)->select('poblation_name')->get();
        foreach ($poblts3 as $poblt3) {
            $ppr = $poblt3;
            $texto=str_replace('"','',$ppr);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('poblation_name','',$texto);
            $texto=str_replace(':','',$texto);
            $ppr=$texto;
            $ArrayPbls [] = $ppr; 
            //$pbls3= $pbls3 . " / " . $ppr;
        }
        //$pbls5 = $pbls5 . $pbls3;
        //$ArrayPbls [] =$pbls3;
        //$pbls3= "";
        $ppr = "";
        $texto = "";
        //***************************************************************************************
        $poblts4 = Poblation::where('id_route3',$ss1)->select('poblation_name')->get();
        foreach ($poblts4 as $poblt4) {
            $ppr = $poblt4;
            $texto=str_replace('"','',$ppr);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('poblation_name','',$texto);
            $texto=str_replace(':','',$texto);
            $ppr=$texto; 
            $ArrayPbls [] = $ppr;
            //$pbls4= $pbls4 . " / " . $ppr;
        }
        //$pbls5 = $pbls5 . $pbls4;
        //$ArrayPbls [] =$pbls5;
        $pbls1= "";
        $pbls2= "";
        $pbls3= "";
        $pbls4= "";
        $pbls5= "";
        $ppr = "";
        $texto = "";
        //***************************************************************
        //id_truck
        $ss2 = $ftfct->id_truck;
        $Tck = Truck::Where('id',$ss2)->select('truck_number')->get();
        $texto=str_replace('"','',$Tck);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('truck_number','',$texto);
        $texto=str_replace(':','',$texto);
        $Tck=$texto;//numero de camion
        $texto = "";
        //***************************************************************
        //id_driver
        $ss3 = $ftfct->id_driver;
        $dvr = Person::Where('id',$ss3)->select('name')->get();
        $texto=str_replace('"','',$dvr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('name','',$texto);
        $texto=str_replace(':','',$texto);
        $dvr=$texto;//nombre del chofer
        $texto = "";
        //***************************************************************
        //id_carrier1
        $ss4 = $ftfct->id_carrier1;
        $cr1 = Person::Where('id',$ss4)->select('name')->get();
        $texto=str_replace('"','',$cr1);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('name','',$texto);
        $texto=str_replace(':','',$texto);
        $cr1=$texto;//nombre del cargador 1
        $texto = "";
        //***************************************************************
        //id_carrier2
        $ss5 = $ftfct->id_carrier2;
        $cr2 = Person::Where('id',$ss5)->select('name')->get();
        $texto=str_replace('"','',$cr2);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('name','',$texto);
        $texto=str_replace(':','',$texto);
        $cr2=$texto;//nombre del cargador 2
        $texto = "";
        //***************************************************************
        return view('admin.trip_result.print')->with(compact('tripRR','ftfct','Gf','GnF','Rt','Tck','dvr','cr1','cr2','ArrayPbls'));
    }  
}
