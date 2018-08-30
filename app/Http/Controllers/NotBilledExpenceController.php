<?php

namespace App\Http\Controllers;
// inclucion de archivos para la ejecucion de las clases o modelos para consultas de ELOQUENT
use Illuminate\Http\Request;
use App\Not_Billed_expense;
use App\Trip_Fact;

class NotBilledExpenceController extends Controller
{
    /*
        Esta clase contiene los siguientes metodos 
        *index - Metodo que carga la vista de los datos no facturados para su vizualización en las tablas
        *create - sin uso por el momento
        *store - sin uso por el momento
    */
    public function index(){
        $notBilledses = Not_Billed_expense::paginate(10);
        $nums = Not_Billed_expense::all()->count();
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
    	return view('admin.not_billed_expense.index')->with(compact('notBilledses','Arrayfac','nums'));//listado
    }
    public function create(){
    	//return view('admin.not_billed_expense.create');//formulario de registro(sin uso)
    }
    public function store(){
    	//registrar el nuevo producto(sin uso)
    }
}
