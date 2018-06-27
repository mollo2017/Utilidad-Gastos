<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Not_Billed_expense;
use App\Trip_Fact;
use App\Billed_expense;

class PrintController extends Controller
{
    //
    public function index(){
    	$billedExpenses = Billed_expense::paginate(10);
        //****************************************************************
        //********fecha*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac ;
        foreach ($billedExpenses as $billedExpense) {
            $pp = $billedExpense->id_trip;
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
        //***************************************************************
    	return view('admin.print.index')->with(compact('billedExpenses','Arrayfac'));//listado
    }
    public function indexnf(){
        $notBilledses = Not_Billed_expense::paginate(10);
        //****************************************************************
        //********fecha*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac ;
        foreach ($notBilledses as $notBilledse) {
            $pp = $notBilledse->id_trip;
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
    	return view('admin.print.indexNf')->with(compact('notBilledses','Arrayfac'));//listado
    }
    public function show(Request $request){
    	//dd($request->all());
    	//**********************************
        $texto =$request->input('f_date');
        $arra = explode("/",$texto);
        $temp = $arra[2];
        unset($arra[2]);
        $arra2 = array_reverse($arra);
        $arra2[]=$temp;
        $arra3 = array_reverse($arra2);
        $texto = "";
        $texto = implode('-',$arra3);
        $fechaff = $texto;        
        $texto = "";
        unset($arra);
        unset($arra2);
        unset($arra3);
        //**********************************
        $nameses = Trip_Fact::where('loading_date',$fechaff)->select('id')->get();
        $arraIds ;
        foreach ($nameses as $names) 
        {
	        $texto=str_replace('"','',$names);
	        $texto=str_replace('{','',$texto);
	        $texto=str_replace('}','',$texto);
	        $texto=str_replace('[','',$texto);
	        $texto=str_replace(']','',$texto);
	        $texto=str_replace('id','',$texto);
	        $texto=str_replace(':','',$texto);
	        $names=$texto;
	        $arraIds [] = $names;
	        $texto="";
        }
        //**********************************
        $arraBlld ;
        foreach ($arraIds as $arraId) {
        	$billedExpenses = Billed_expense::where('id',$nameses)->get();
        	$arraBlld [] = $billedExpenses;
        }
        $billedExpenses = Billed_expense::where('id',$nameses)->get();
        return view('admin.print.vsearch1')->with(compact('billedExpenses'));//listado
    }
    public function vsearch1($id){
    	$billedExpenses = Billed_expense::where('id',$id)->get();
        /****************************************************************
        //********fecha*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac ;
        foreach ($billedExpenses as $billedExpense) {
            $pp = $billedExpense->id_trip;
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
        }*/
        //***************************************************************
    	return view('admin.print.vsearch1')->with(compact('billedExpenses'));//listado
    }

}
