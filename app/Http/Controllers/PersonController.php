<?php

namespace App\Http\Controllers;
// inclucion de archivos para la ejecucion de las clases o modelos para consultas de ELOQUENT
use Illuminate\Http\Request;
use App\Person;
/*
    Esta clase contiene los siguientes metodos 
    *index - Metodo que carga la vista de los datos del personal para su vizualización en las tablas
    *create - Metodo que devuelve la vista para ingreasar los datos para un nuevo empleado
    *store - Metodo que recibe los datos de la vista create y procesa los datos para su posterior 
        almacenamiiento dentro de la base de datos
    *edit - Metodo que devuelve una vista con un formulario para la edicion de los datos de los empleados
    *update - Metodo que recive los datos de la vista edit y los procesa para su posterior almacenamiento
        dentro de la base de datos
    *destroy - Metodo para la eliminacion del registro de datos de un usuario, la eliminacion es fisica 
        de la base de datos
*/
class PersonController extends Controller
{
    //
	public function index(){
    	$people = Person::paginate(10);
        $nums = Person::all()->count();
    	return view('admin.person.index')->with(compact('people','nums'));//listado
    }
    public function create(){
        
    	return view('admin.person.create');//formulario de registro
    }
    public function store(Request $request){
    	//registrar el nuevo producto
        if($request->input('name')==null){
            $noty = "¡¡wow!!, por favor rellena todos los campos antes de continuar";
            return back()->with(compact('noty'));        
        } 
        $comp = Person::all();
        foreach ($comp as $key) {
            if($request->input('name')==$key->name){
                $noty = "Lo sentimos el dato ya existe en los registros, por favor intente con otro";
                return back()->with(compact('noty'));
                break;
            }
        }
        
        $personal = new Person();
        $personal->name = $request->input('name');
        $personal->roll = $request->input('roll');
        $personal->save();
        return redirect('/admin/person');
    }
    public function edit($id){
        $people = Person::find($id);
        return view('admin.person.edit')->with(compact('people'));//formulario de edicion
    }
    public function update(Request $request,$id){
        $personal = Person::find($id);
        $personal->name = $request->input('name');
        $personal->roll = $request->input('roll');
        $personal->save();
        return redirect('/admin/person');
    }
    public function destroy($id){
        $personal = Person::find($id);
        $personal->delete();
        $noty = "Elemento eliminado satisfactoriamente";
        return back()->with(compact('noty'));
    }

}
