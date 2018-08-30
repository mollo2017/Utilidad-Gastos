<?php

namespace App\Http\Controllers;
// inclucion de archivos para la ejecucion de las clases o modelos para consultas de ELOQUENT
use Illuminate\Http\Request;
use App\Route;
use App\Poblation;
/*
    Esta clase contiene los siguientes metodos 
    *index - Metodo que carga la vista de los datos de las rutas para su vizualización en las tablas
    *create - Metodo que devuelve la vista para ingreasar los datos para una nueva ruta
    *store - Metodo que recibe los datos de la vista create y procesa los datos para su posterior 
        almacenamiiento dentro de la base de datos
    *edit - Metodo que devuelve una vista con un formulario para la edicion de los datos de las rutas
    *update - Metodo que recive los datos de la vista edit y los procesa para su posterior almacenamiento
        dentro de la base de datos
    *destroy - Metodo para la eliminacion del registro de datos de una ruta, la eliminacion es fisica 
        de la base de datos
*/
class RouteController extends Controller
{
    //
    public function index(){
        $routs = Route::paginate(10);
        $nums = Route::all()->count();
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
       	return view('admin.route.index')->with(compact('routs','ArrayPbls','nums'));//listado
    }
    public function create(){

    	return view('admin.route.create');//formulario de registro
    }
    public function store(Request $request){
    	//registrar el nuevo producto
        $enrt = new Route();
        if($request->input('route_number')==null){
            $noty = "¡¡wow!!, por favor rellena todos los campos antes de continuar";
            return back()->with(compact('noty'));        
        }
        $comp = Route::all();
        foreach ($comp as $key) {
            if($request->input('route_number')==$key->route_number){
                $noty = "Lo sentimos el dato ya existe en los registros, por favor intente con otro";
                return back()->with(compact('noty'));
                break;
            }
        }
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
