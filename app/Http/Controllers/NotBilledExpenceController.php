<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Not_Billed_expense;
use App\Trip_Fact;

class NotBilledExpenceController extends Controller
{
    //
    public function index(){
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
    	return view('admin.not_billed_expense.index')->with(compact('notBilledses','Arrayfac'));//listado
    }
    public function create(){
    	return view('admin.not_billed_expense.create');//formulario de registro
    }
    public function store(){
    	//registrar el nuevo producto
    }
}
