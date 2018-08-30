<?php

namespace App\Http\Controllers;
// inclucion de archivos para la ejecucion de las clases o modelos para consultas de ELOQUENT
use Illuminate\Http\Request;
use App\Billed_expense;
use App\Not_Billed_expense;
use App\Person;
use App\Route;
use App\truck;
use App\Trip_Fact;
use App\Trip_Result;
/*
    Esta clase contiene los siguientes metodos 
    *index - Metodo que carga la vista de los datos facturados para su vizualización en las tablas
    *create - Metodo que devuelve la vista para crear un viaje nuevo con algunos datos para facilitar 
        el llenado del formulario
    *store - Metodo que recibe los datos de la vista create y procesa los datos para su posterior 
        almacenamiiento dentro de la base de datos
    *edit - Metodo que devuelve una vista con un formulario para el completado de la informacion 
        previamente almacenada pero no finiquitada
    *update - Metodo que recive los datos de la vista edit y los procesa para su posterior almacenamiento
        dentro de la base de datos
*/
class BilledExpenceController extends Controller
{
    //
    public function index(){
    	$billedExpenses = Billed_expense::paginate(10);
        $nums = Billed_expense::all()->count();
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
        //return $billedExpenses;
    	return view('admin.billed_expense.index')->with(compact('billedExpenses','Arrayfac','nums'));//listado//mostar info de los gastos
    }
    public function create(){
        $ruta = Route::all();
        $truck = Truck::all();
        $ChoferPeopleses = Person::where('roll','chofer')->get();
        $Char1Peopleses = Person::where('roll', 'cargador')->get();
        $Char2Peopleses = Person::where('roll', 'cargador')->get();
        $GrocerPeopleses = Person::where('roll', 'bodeguero')->get();
    	return view('admin.billed_expense.create')->with(compact('ChoferPeopleses','Char1Peopleses', 'Char2Peopleses', 'GrocerPeopleses', 'ruta', 'truck'));//formulario de registro//generar nuevo viaje 
    }
    public function store(Request $request){
        //********************************************************************
        $data = $request->all();
        foreach ($data as $key) {
            if($key==null){
                $noty = "¡¡wow!!, por favor rellena todos los campos antes de continuar";
                return back()->with(compact('noty'));
                break;
            }
        }
        
        //***************************************************************
        //dd($request->all());
        //extraer id de la ruta
        $texto =$request->input('id_route');
        $idrr = Route::where('route_number',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idrr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idrr=$texto;
        $texto="";
        //**********************************
        //extraer id del camion
        $texto =$request->input('id_truck');
        $idtck = Truck::where('truck_number',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idtck);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idtck=$texto;
        $texto="";
        //**********************************
        //extraer id del chofer
        $texto =$request->input('id_driver');
        $iddvr = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$iddvr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $iddvr=$texto;
        $texto="";
        //**********************************
        //extraer id del cargador1
        $texto =$request->input('id_carrier1');
        $idcr1 = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idcr1);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idcr1=$texto;
        $texto="";
        //**********************************
        //extraer id del cargador2
        $texto =$request->input('id_carrier2');
        $idcr2 = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idcr2);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idcr2=$texto;
        $texto="";
        //**********************************
        //extraer id del bodeguero
        $texto =$request->input('id_grocer');
        $idgcr = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idgcr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idgcr=$texto;
        $texto="";        
        //**********************************
        //arreglo de fecha de carga
        $texto =$request->input('loading_date');
        $arra = explode("/",$texto);
        $temp = $arra[2];
        unset($arra[2]);
        $arra2 = array_reverse($arra);
        $arra2[]=$temp;
        $arra3 = array_reverse($arra2);
        $texto = "";
        $texto = implode('-',$arra3);
        $fechaff = $texto;        $texto = "";
        unset($arra);
        unset($arra2);
        unset($arra3);
        //**********************************
        //arreglo de fecha de arrivo//
        $texto =$request->input('arrival_date');
        $arra = explode("/",$texto);
        $temp = $arra[2];
        unset($arra[2]);
        $arra2 = array_reverse($arra);
        $arra2[]=$temp;
        $arra3 = array_reverse($arra2);
        $texto = "";
        $texto = implode('-',$arra3);
        $fechall = $texto;
        $texto = "";
        unset($arra);
        unset($arra2);
        unset($arra3);
        //*****************registrar los factores******************************
        $lstFct="";
        $factores = new Trip_Fact();
        $factores->id_route = $idrr;
        $factores->id_truck = $idtck;
        $factores->id_driver = $iddvr;
        $factores->id_carrier1 = $idcr1;
        $factores->id_carrier2 = $idcr2;
        $factores->id_grocer = $idgcr;
        $factores->initial_km = $request->input('initial_km');
        $factores->final_km = $request->input('final_km');
        $factores->diessel_quantity_initial = $request->input('diessel_quantity_initial');
        $factores->diessel_quantity_final = $request->input('diessel_quantity_final');
        $factores->loading_date = $fechaff;
        $factores->arrival_date = $fechall;
        $factores->weight_conteiner = $request->input('weight_conteiner');
        $factores->volume = $request->input('volume');
        $factores->trip_amount = $request->input('trip_amount');
        $factores->departure_time = $request->input('departure_time');
        $factores->arrival_time = $request->input('arrival_time');
        $factores->save();
        echo "Factores guardados";//guarda los datos de la vista
        //*********************Registrar gastos***********************************
        //guardar resultados principales
        $Resultados = new Trip_Result();
        $Resultados->id_trip_fact = $factores->id;
        $Resultados->total_boxes = $request->input('total_boxes');
        $Resultados->gross_profit = $request->input('gross_profit');
        $Resultados->save();
        return redirect('/admin/trip_facts');//guardar nuevo viaje
    }
    public function edit($id){
        $TripFFact = Trip_Fact::find($id);//datos de los gastos facturados
        $idTf = $TripFFact->id;
        $ResPrincipales = Trip_Result::where('id_trip_fact',$idTf)->get();//datos de los resultados
        //***************************************************************
        //total de cajas
        //gross_profit
        $st2 = $ResPrincipales[0]->gross_profit;
        //$Rt = Route::Where('id',$st2)->select('route_number')->get();
        $texto=str_replace('"','',$st2);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('gross_profit','',$texto);
        $texto=str_replace(':','',$texto);
        $st2=$texto;//numero de ruta guardado
        $texto = "";
        //***************************************************************
        //utilidad
        $st1 = $ResPrincipales[0]->total_boxes;
        //$Rt = Route::Where('id',$st1)->select('route_number')->get();
        $texto=str_replace('"','',$st1);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('total_boxes','',$texto);
        $texto=str_replace(':','',$texto);
        $st1=$texto;//numero de ruta guardado
        $texto = "";
        //***************************************************************
        $ruta = Route::all();
        $truck = Truck::all();
        $ChoferPeopleses = Person::where('roll','chofer')->get();
        $Char1Peopleses = Person::where('roll', 'cargador')->get();
        $Char2Peopleses = Person::where('roll', 'cargador')->get();
        $GrocerPeopleses = Person::where('roll', 'bodeguero')->get();
        //***************************************************************
        //regresar fecha
        $texto =$TripFFact->loading_date;
        $arra = explode("-",$texto);
        $temp = $arra[0];
        unset($arra[0]);
        $arra[]=$temp;
        $texto = "";
        $texto = implode('/',$arra);
        $fechaff = $texto; //guardar la fecha
        unset($arra);
        $texto = "";
        //***************************************************************
        //id_route
        $ss1 = $TripFFact->id_route;
        $Rt = Route::Where('id',$ss1)->select('route_number')->get();
        $texto=str_replace('"','',$Rt);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('route_number','',$texto);
        $texto=str_replace(':','',$texto);
        $Rt=$texto;//numero de ruta guardado
        $texto = "";
        //***************************************************************
        //id_truck
        $ss2 = $TripFFact->id_truck;
        $Tck = Truck::Where('id',$ss2)->select('truck_number')->get();
        $texto=str_replace('"','',$Tck);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('truck_number','',$texto);
        $texto=str_replace(':','',$texto);
        $Tck=$texto;//numero de camion
        $texto = "";
        //***************************************************************
        //id_driver
        $ss3 = $TripFFact->id_driver;
        $dvr = Person::Where('id',$ss3)->select('name')->get();
        $texto=str_replace('"','',$dvr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('name','',$texto);
        $texto=str_replace(':','',$texto);
        $dvr=$texto;//nombre del chofer
        $texto = "";
        //***************************************************************
        //id_carrier1
        $ss4 = $TripFFact->id_carrier1;
        $cr1 = Person::Where('id',$ss4)->select('name')->get();
        $texto=str_replace('"','',$cr1);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('name','',$texto);
        $texto=str_replace(':','',$texto);
        $cr1=$texto;//nombre del cargador 1
        $texto = "";
        //***************************************************************
        //id_carrier2
        $ss5 = $TripFFact->id_carrier2;
        $cr2 = Person::Where('id',$ss5)->select('name')->get();
        $texto=str_replace('"','',$cr2);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('name','',$texto);
        $texto=str_replace(':','',$texto);
        $cr2=$texto;//nombre del cargador 2
        $texto = "";
        //***************************************************************
        //id_grocer
        $ss6 = $TripFFact->id_grocer;
        $gcr = Person::Where('id',$ss6)->select('name')->get();
        $texto=str_replace('"','',$gcr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('name','',$texto);
        $texto=str_replace(':','',$texto);
        $gcr=$texto;//nombre del bodeguero
        $texto = "";
        //***************************************************************
        //return $ResPrincipales[0]->total_boxes;
        //----------------------------------------------------------------
        return view('admin.billed_expense.edit')->with(compact('TripFFact','st1','st2','Rt','Tck','dvr','cr1','cr2','gcr','fechaff','ruta','truck','ChoferPeopleses','Char1Peopleses','Char2Peopleses','GrocerPeopleses'));//formulario para editar viaje con gastos
    }  
    public function update(Request $request,$id){//guardar viaje editado
        $data = $request->all();
        foreach ($data as $key) {
            if($key==null){
                $noty = "¡¡wow!!, por favor rellena todos los campos antes de continuar";
                return back()->with(compact('noty'));
                break;
            }
        }
        $totalGnF = 0;
        $totalGF = 0;
        //**********************************************************************
        $gastos = new Billed_expense();
        $gastosN = new Not_Billed_expense();

        $gastos->id_trip = $id;
        $gastosN->id_trip = $id;
        //**********************************************************************
        //Diessel
        $gastos ->foreign_diessel = $request->input('foreign_diessel');
        $totalGF = $totalGF + $request->input('foreign_diessel');
        //*************************************************************************
        //driver_food
        $temp ="";
        //$tempfd ="";
        $temp = $request->input('op_driver_food');
        $gastosN->driver_food = $request->input('driver_food');
        $totalGnF = $totalGnF + $temp;
        $tempfd = $temp;
        //*************************************************************************
        //driver_salary
        $gastos ->driver_salary = $request->input('driver_salary');
        $totalGF = $totalGF + $request->input('driver_salary');
        //*************************************************************************
        //carrier1_food
        $temp ="";
        $temp = $request->input('carrier1_food');
        $gastosN->carrier1_food = $request->input('carrier1_food');
        $totalGnF = $totalGnF + $temp;
        $tempfd = $tempfd + $temp;
        //*************************************************************************
        //carrier1_salary
        $gastos ->carrier1_salary = $request->input('carrier1_salary');
        $totalGF = $totalGF + $request->input('carrier1_salary');
        //*************************************************************************
        //carrier2_food
        $temp ="";
        $temp = $request->input('carrier2_food');
        $gastosN->carrier2_food = $request->input('carrier2_food');
        $totalGnF = $totalGnF + $temp;
        $tempfd = $tempfd + $temp;
        //*************************************************************************
        //carrier2_salary
        $gastos ->carrier2_salary = $request->input('carrier2_salary');
        $totalGF = $totalGF + $request->input('carrier2_salary');
        //*************************************************************************
        //tollbooth
        $gastos ->tollbooth = $request->input('tollbooth');
        $totalGF = $totalGF + $request->input('tollbooth');
        //*************************************************************************
        //iave_tollbooth
        $gastos ->iave_tollbooth = $request->input('iave_tollbooth');
        $totalGF = $totalGF + $request->input('iave_tollbooth');
        //*************************************************************************
        //maneuvers facturados
        $gastos ->maneuvers = $request->input('maneuvers1');
        $totalGF = $totalGF + $request->input('maneuvers1');
        //*************************************************************************
        //maneuvers facturados
        $temp ="";
        $temp = $request->input('maneuvers2');
        $gastosN->maneuvers = $request->input('maneuvers2');
        $totalGnF = $totalGnF + $temp;
        //*************************************************************************
        //passages
        $gastos ->passages = $request->input('passages');
        $totalGF = $totalGF + $request->input('passages');
        //*************************************************************************
        //permissions facurado
        $gastos ->permissions = $request->input('permissions1');
        $totalGF = $totalGF + $request->input('permissions1');
        //*************************************************************************
        //permissions no facurado
        $gastosN->permissions = $request->input('permissions2');
        $totalGnF = $totalGnF + $request->input('permissions2');
        //*************************************************************************
        //repairs facturado
        $gastos ->repairs = $request->input('repairs1');
        $totalGF = $totalGF + $request->input('repairs1');  
        //*************************************************************************
        //repairs no facturado                    
        $temp ="";
        $temp = $request->input('repairs2');
        $gastosN->repairs = $request->input('repairs2');
        $totalGnF = $totalGnF + $temp;
        //*************************************************************************
        //parking
        $temp ="";
        $temp = $request->input('parking');
        $gastosN->parking = $request->input('parking');
        $totalGnF = $totalGnF + $temp;
        //*************************************************************************
        //spare_parts
        $gastos ->spare_parts = $request->input('spare_parts');
        $totalGF = $totalGF + $request->input('spare_parts');
        //*************************************************************************
        //mulcts
        $temp ="";
        $temp = $request->input('mulcts');
        $gastosN->mulcts = $request->input('mulcts');
        $totalGnF = $totalGnF + $temp;
        //*************************************************************************
        //cargo_van facturado
        $gastos ->cargo_van = $request->input('cargo_van1');
        $totalGF = $totalGF + $request->input('cargo_van1');
        //*************************************************************************
        //cargo_van no facturado
        $temp = $request->input('cargo_van2');
        $gastosN->cargo_van = $request->input('cargo_van2');
        $totalGnF = $totalGnF + $temp;
        //*************************************************************************
        //boardinghouse
        $temp ="";
        $temp = $request->input('boardinghouse');
        $gastosN->boardinghouse = $request->input('boardinghouse');
        $totalGnF = $totalGnF + $temp;
        //*************************************************************************
        //agents_commission
        $temp ="";
        $temp = $request->input('op_agents_commission');
        $gastos ->agents_commission = $request->input('agents_commission');
        $totalGF = $totalGF + $request->input('agents_commission');
        //*************************************************************************
        //other facturado
        $gastos ->other = $request->input('other1');
        $totalGF = $totalGF + $request->input('other1');
        //*************************************************************************
        //vulcanizer
        $gastos ->vulcanizer = $request->input('vulcanizer');
        $totalGF = $totalGF + $request->input('vulcanizer');
        //*************************************************************************
        //hostage
        $gastos ->hostage = $request->input('hostage');
        $totalGF = $totalGF + $request->input('hostage');
        //*************************************************************************
        //other no facturado
        $temp ="";
        $temp = $request->input('other2');
        $gastosN->other = $request->input('other2');
        $totalGnF = $totalGnF + $temp;
        //*************************************************************************
        $TotalKm = "";
        $Km1 = "";
        $gastos ->totalsum = $totalGF;
        $gastosN ->totalsum = $totalGnF;
        $TotalGastos = $totalGnF + $totalGF;
        $Km1 = $request->input('initial_km');
        $TotalKm = $request->input('final_km');
        $TotalKm = $TotalKm - $Km1;
        $TotalDsll = $request->input('diessel_quantity_initial');
        $TotalCajas =$request->input('total_boxes');
        $CostPB = $TotalGastos / $TotalCajas;
        $CostPKm = $TotalGastos / $TotalKm;
        $Utili = $request->input('gross_profit');
        $NtUtili = $Utili - $TotalGastos;
        //*************************************************************************
        $gastos->save();
        //echo "---Gastos facturados guardados---";
        $gastosN->save();
        //echo "---Gastos no-facturados guardados---";
        //*************************************************************************
        $TripFFact = Trip_Fact::find($id);//datos de los gastos facturados
        $idTf = $TripFFact->id;
        //************************************************************************
        $ResPrincipales = Trip_Result::where('id_trip_fact',$idTf)->first();
        $Resultados = Trip_Result::find($ResPrincipales->id);
        $Resultados->id_trip_fact = $idTf;
        $Resultados->total_expense = $TotalGastos;
        $Resultados->total_boxes = $request->input('total_boxes');
        $Resultados->total_km = $TotalKm;
        $Resultados->cost_per_box = $CostPB;
        $Resultados->cost_per_km = $CostPKm;
        $Resultados->gross_profit = $request->input('gross_profit');
        $Resultados->net_gross = $NtUtili;
        $Resultados->save();
        //************************************************************************
        $texto =$request->input('id_route');
        $idrr = Route::where('route_number',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idrr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idrr=$texto;
        $texto="";
        //**********************************
        //extraer id del camion
        $texto =$request->input('id_truck');
        $idtck = Truck::where('truck_number',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idtck);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idtck=$texto;
        $texto="";
        //**********************************
        //extraer id del chofer
        $texto =$request->input('id_driver');
        $iddvr = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$iddvr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $iddvr=$texto;
        $texto="";
        //**********************************
        //extraer id del cargador1
        $texto =$request->input('id_carrier1');
        $idcr1 = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idcr1);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idcr1=$texto;
        $texto="";
        //**********************************
        //extraer id del cargador2
        $texto =$request->input('id_carrier2');
        $idcr2 = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idcr2);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idcr2=$texto;
        $texto="";
        //**********************************
        //extraer id del bodeguero
        $texto =$request->input('id_grocer');
        $idgcr = Person::where('name',$texto)->select('id')->get();
        $texto="";
        $texto=str_replace('"','',$idgcr);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
            $idgcr=$texto;
        $texto="";        
        //**********************************
        //arreglo de fecha de carga
        $texto =$request->input('loading_date');
        $arra = explode("/",$texto);
        $temp = $arra[2];
        unset($arra[2]);
        $arra2 = array_reverse($arra);
        $arra2[]=$temp;
        $arra3 = array_reverse($arra2);
        $texto = "";
        $texto = implode('-',$arra3);
        $fechaff = $texto;        $texto = "";
        unset($arra);
        unset($arra2);
        unset($arra3);
        //**********************************
        //arreglo de fecha de arrivo//
        $texto =$request->input('arrival_date');
        $arra = explode("/",$texto);
        $temp = $arra[2];
        unset($arra[2]);
        $arra2 = array_reverse($arra);
        $arra2[]=$temp;
        $arra3 = array_reverse($arra2);
        $texto = "";
        $texto = implode('-',$arra3);
        $fechall = $texto;
        $texto = "";
        unset($arra);
        unset($arra2);
        unset($arra3);

        //*****************registrar los factores******************************
        $TripFFact->id_route = $idrr;
        $TripFFact->id_truck = $idtck;
        $TripFFact->id_driver = $iddvr;
        $TripFFact->id_carrier1 = $idcr1;
        $TripFFact->id_carrier2 = $idcr2;
        $TripFFact->id_grocer = $idgcr;
        $TripFFact->initial_km = $request->input('initial_km');
        $TripFFact->final_km = $request->input('final_km');
        $TripFFact->diessel_quantity_initial = $request->input('diessel_quantity_initial');
        $TripFFact->diessel_quantity_final = $request->input('diessel_quantity_final');
        $TripFFact->loading_date = $fechaff;
        $TripFFact->arrival_date = $fechall;
        $TripFFact->weight_conteiner = $request->input('weight_conteiner');
        $TripFFact->volume = $request->input('volume');
        $TripFFact->trip_amount = $request->input('trip_amount');
        $TripFFact->departure_time = $request->input('departure_time');
        $TripFFact->arrival_time = $request->input('arrival_time');
        $TripFFact->arrival_time = $request->input('arrival_time');
        $TripFFact->ban = "1";
        $TripFFact->save();
        //************************************************************************
        return view('home');
    }
}
