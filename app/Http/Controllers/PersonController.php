<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    //
	public function index(){
    	$people = Person::paginate(10);
    	return view('admin.person.index')->with(compact('people'));//listado
    }
    public function create(){
    	return view('admin.person.create');//formulario de registro

    }
    public function store(Request $request){
    	//registrar el nuevo producto
        //dd($request->all());
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
        return back();
    }

}
