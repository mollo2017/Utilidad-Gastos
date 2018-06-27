<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poblation;
use App\Route;

class PoblationController extends Controller
{
    //
    public function index(){
        $poblats = Poblation::paginate(10);
        //****************************************************************
        //********ruta1*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac1 ;
        foreach ($poblats as $poblat) {
            $pp = $poblat->id_route1;
            $nameses = Route::where('id',$pp)->select('route_number')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arrayfac1[] = $nameses;
        }
            //****************************************************************
            //********ruta2*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac2 ;
        foreach ($poblats as $poblat) {
            $pp = $poblat->id_route2;
            $nameses = Route::where('id',$pp)->select('route_number')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arrayfac2[] = $nameses;
        }
            //****************************************************************
        //********ruta3*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac3 ;
        foreach ($poblats as $poblat) {
            $pp = $poblat->id_route3;
            $nameses = Route::where('id',$pp)->select('route_number')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arrayfac3[] = $nameses;
        }
            //****************************************************************
        //********ruta4*********
        $texto="";
        $pp = "";
        $nameses = "";
        $Arrayfac4 ;
        foreach ($poblats as $poblat) {
            $pp = $poblat->id_route4;
            $nameses = Route::where('id',$pp)->select('route_number')->get();
            $texto=str_replace('"','',$nameses);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $nameses=$texto; 
            $Arrayfac4[] = $nameses;
        }
            //****************************************************************
    	return view('admin.poblation.index')->with(compact('poblats','Arrayfac1','Arrayfac2','Arrayfac3','Arrayfac4'));//listado
    }
    public function create(){
        $ruta = Route::all();
    	return view('admin.poblation.create')->with(compact('ruta'));//formulario de registro
    }
    public function store(Request $request){
        $Poblt = new Poblation();
        $Poblt->poblation_name = $request->input('poblation_name');
        //***************************************************************
        $texto =$request->input('id_route1');
        $idrr1 = Route::where('route_number',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idrr1);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idrr1=$texto;
        $texto="";
        $Poblt->id_route1 = $idrr1;
        //**********************************
        $texto =$request->input('id_route2');
        if($texto != null)
        {
            $idrr2 = Route::where('route_number',$texto)->select('id')->get();
            $texto="";
            $texto=str_replace('"','',$idrr2);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('id','',$texto);
            $texto=str_replace(':','',$texto);
            $idrr2=$texto;
        }
        $Poblt->id_route2 = $texto;
        $texto="";
        //**********************************
        $texto =$request->input('id_route3');
        if($texto != null)
        {
            $idrr3 = Route::where('route_number',$texto)->select('id')->get();
            $texto="";
            $texto=str_replace('"','',$idrr3);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('id','',$texto);
            $texto=str_replace(':','',$texto);
            $idrr3=$texto;
        }
        $Poblt->id_route3 = $texto;
        $texto="";
        //**********************************
        $texto =$request->input('id_route4');
        if($texto != null)
        {
            $idrr4 = Route::where('route_number',$texto)->select('id')->get();
            $texto="";
            $texto=str_replace('"','',$idrr4);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('id','',$texto);
            $texto=str_replace(':','',$texto);
            $idrr4=$texto;
        }
        $Poblt->id_route4 = $texto;
        $texto="";
        //**********************************
        $Poblt->save();
        return redirect('/admin/poblation');
    	//registrar el nuevo producto
    }
    public function edit($id){
        $routes = Route::all();
        $Poblt = Poblation::find($id);
        $ss1 = $Poblt->id_route1;
        $ss2 = $Poblt->id_route2;
        $ss3 = $Poblt->id_route3;
        $ss4 = $Poblt->id_route4;
        $ruta1 = Route::where('id',$ss1)->select('route_number')->get();
            $texto=str_replace('"','',$ruta1);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $ruta1=$texto;
            $texto = "";
        $ruta2 = Route::where('id',$ss2)->select('route_number')->get();
            $texto=str_replace('"','',$ruta2);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $ruta2=$texto;
            $texto = "";
        $ruta3 = Route::where('id',$ss3)->select('route_number')->get();
            $texto=str_replace('"','',$ruta3);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $ruta3=$texto;
            $texto = "";
        $ruta4 = Route::where('id',$ss4)->select('route_number')->get();
            $texto=str_replace('"','',$ruta4);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('route_number','',$texto);
            $texto=str_replace(':','',$texto);
            $ruta4=$texto;
            $texto = "";
        return view('admin.poblation.edit')->with(compact('Poblt','routes','ruta1','ruta2','ruta3','ruta4'));//formulario de registro
    }
     public function update(Request $request,$id){
        $Poblt = Poblation::find($id);
        $Poblt->poblation_name = $request->input('poblation_name');
        //***************************************************************
        $texto =$request->input('id_route1');
        $idrr1 = Route::where('route_number',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idrr1);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idrr1=$texto;
        $texto="";
        $Poblt->id_route1 = $idrr1;
        //**********************************
        $texto =$request->input('id_route2');
        if($texto != null)
        {
            $idrr2 = Route::where('route_number',$texto)->select('id')->get();
            $texto="";
            $texto=str_replace('"','',$idrr2);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('id','',$texto);
            $texto=str_replace(':','',$texto);
            $idrr2=$texto;
        }
        $Poblt->id_route2 = $texto;
        $texto="";
         //**********************************
        $texto =$request->input('id_route3');
        if($texto != null)
        {
            $idrr3 = Route::where('route_number',$texto)->select('id')->get();
            $texto="";
            $texto=str_replace('"','',$idrr3);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('id','',$texto);
            $texto=str_replace(':','',$texto);
            $idrr3=$texto;
        }
        $Poblt->id_route3 = $texto;
        $texto="";
         //**********************************
        $texto =$request->input('id_route4');
        if($texto != null)
        {
            $idrr4 = Route::where('route_number',$texto)->select('id')->get();
            $texto="";
            $texto=str_replace('"','',$idrr4);
            $texto=str_replace('{','',$texto);
            $texto=str_replace('}','',$texto);
            $texto=str_replace('[','',$texto);
            $texto=str_replace(']','',$texto);
            $texto=str_replace('id','',$texto);
            $texto=str_replace(':','',$texto);
            $idrr4=$texto;
        }
        $Poblt->id_route4 = $texto;
        $texto="";
        //**********************************
        $Poblt->save();
        return redirect('/admin/poblation');
    }
    public function destroy($id){
        $Poblt = Poblation::find($id);
        $Poblt->delete();
        return back();
    }
}
