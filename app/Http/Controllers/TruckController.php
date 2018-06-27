<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;

class TruckController extends Controller
{
    //
    public function index(){
        $trucks = Truck::paginate(10);
    	return view('admin.truck.index')->with(compact('trucks'));//listado
    }
    public function create(){
    	return view('admin.truck.create');//formulario de registro
    }
    public function store(Request $request){
    	//registrar el nuevo producto
        $Trck = new Truck();
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
