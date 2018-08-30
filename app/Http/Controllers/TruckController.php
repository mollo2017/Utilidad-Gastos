<?php

namespace App\Http\Controllers;
// inclucion de archivos para la ejecucion de las clases o modelos para consultas de ELOQUENT
use Illuminate\Http\Request;
use App\Truck;
/*
    Esta clase contiene los siguientes metodos 
    *index - Metodo que carga la vista de los datos de los camiones para su vizualización en las tablas
    *create - Metodo que devuelve la vista para ingreasar los datos para un nuevo camión
    *store - Metodo que recibe los datos de la vista create y procesa los datos para su posterior 
        almacenamiiento dentro de la base de datos
    *edit - Metodo que devuelve una vista con un formulario para la edicion de los datos de los camiones
    *update - Metodo que recive los datos de la vista edit y los procesa para su posterior almacenamiento
        dentro de la base de datos
    *destroy - Metodo para la eliminacion del registro de datos de un camión, la eliminacion es fisica 
        de la base de datos
*/
class TruckController extends Controller
{
    //
    public function index(){
        $trucks = Truck::paginate(10);
        $nums = Truck::all()->count();
    	return view('admin.truck.index')->with(compact('trucks','nums'));//listado
    }
    public function create(){

    	return view('admin.truck.create');//formulario de registro
    }
    public function store(Request $request){
    	//registrar el nuevo producto
        $Trck = new Truck();
        if($request->input('truck_number')==null){
            $noty = "¡¡wow!!, por favor rellena todos los campos antes de continuar";
            return back()->with(compact('noty'));        
        }
        $comp = Truck::all();
        foreach ($comp as $key) {
            if($request->input('truck_number')==$key->truck_number){
                $noty = "Lo sentimos el dato ya existe en los registros, por favor intente con otro";
                return back()->with(compact('noty'));
                break;
            }
        }
        $Trck->truck_number = $request->input('truck_number');
        $Trck->save();
        return redirect('/admin/truck');
    }
    public function edit($id){
        $trucks = Truck::find($id);
        return view('admin.truck.edit')->with(compact('trucks'));//formulario de registro
    }
    public function update(Request $request,$id){
        $Trck = Truck::find($id);
        $Trck->truck_number = $request->input('truck_number');
        $Trck->save();
        return redirect('/admin/truck');
    }
    public function destroy($id){
        $Trck = Truck::find($id);
        $Trck->delete();
        return back();
    }
}
