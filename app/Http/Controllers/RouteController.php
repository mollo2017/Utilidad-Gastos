<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Poblation;

class RouteController extends Controller
{
    //
    public function index(){
        $routs = Route::paginate(10);
        $pbls1 ="";
        $pbls2 ="";
        $pbls3 ="";
        $pbls4 ="";
        $pbls5 ="";
        $ArrayPbls;
        foreach ($routs as $rout) {
            $poblts1 = Poblation::where('id_route1',$rout->id)->select('poblation_name')->get();
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
                $pbls1= $pbls1 . " / " . $ppr;
            }
            //$ArrayPbls [] =$pbls1;
            $pbls5 = $pbls5 . $pbls1;
            $ppr = "";
            $texto = "";
            //***************************************************************************************
            $poblts2 = Poblation::where('id_route2',$rout->id)->select('poblation_name')->get();
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
                $pbls2= $pbls2 . " / " . $ppr;
            }
            //$ArrayPbls [] =$pbls2;
            //$pbls2= "";
            $pbls5 = $pbls5 . $pbls2;
            $ppr = "";
            $texto = "";
            //***************************************************************************************
            $poblts3 = Poblation::where('id_route3',$rout->id)->select('poblation_name')->get();
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
                $pbls3= $pbls3 . " / " . $ppr;
            }
            $pbls5 = $pbls5 . $pbls3;
            //$ArrayPbls [] =$pbls3;
            //$pbls3= "";
            $ppr = "";
            $texto = "";
            //***************************************************************************************
            $poblts4 = Poblation::where('id_route3',$rout->id)->select('poblation_name')->get();
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
                $pbls4= $pbls4 . " / " . $ppr;
            }
            $pbls5 = $pbls5 . $pbls4;
            $ArrayPbls [] =$pbls5;
            $pbls1= "";
            $pbls2= "";
            $pbls3= "";
            $pbls4= "";
            $pbls5= "";
            $ppr = "";
            $texto = "";
        }
       	return view('admin.route.index')->with(compact('routs','ArrayPbls'));//listado
    }
    public function create(){
    	return view('admin.route.create');//formulario de registro
    }
    public function store(Request $request){
    	//registrar el nuevo producto
        $enrt = new Route();
        $enrt->route_number = $request->input('route_number');
        $enrt->save();
        return redirect('/admin/route');
    }
    public function edit($id){
        $routs = Route::find($id);
        return view('admin.route.edit')->with(compact('routs'));//formulario de registro
    }
    
    public function update(Request $request,$id){
        //registrar el nuevo producto
        $enrt = Route::find($id);
        $enrt->route_number = $request->input('route_number');
        $enrt->save();
        return redirect('/admin/route');
    }
    public function destroy($id){
        $enrt = Route::find($id);
        $enrt->delete();
        return back();
    }
    
}
