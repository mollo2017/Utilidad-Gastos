 /*$totalGnF = 0;
        $totalGF = 0;
        //*************************************************************************
        //$lstFct = 
        /*
        $gastos = new Billed_expense();
        $gastosN = new Not_Billed_expense();

        $gastos->id_trip = $factores->id;
        $gastosN->id_trip = $factores->id;

        $temp ="";
        $temp = $request->input('op_foreign_diessel');
        if($temp == 'on'){
            $gastos ->foreign_diessel = $request->input('foreign_diessel');
            $totalGF = $totalGF + $request->input('foreign_diessel');
        }
        else {
            $gastosN->foreign_diessel = $request->input('foreign_diessel');
            $temp = $request->input('foreign_diessel');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //driver_food
        $temp ="";
        $temp = $request->input('op_driver_food');
        if($temp == 'on'){
            $gastos ->driver_food = $request->input('driver_food');
            $totalGF = $totalGF + $request->input('driver_food');
        }
        else {
            $gastosN->driver_food = $request->input('driver_food');
            $temp = $request->input('driver_food');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //driver_salary
        $temp ="";
        $temp = $request->input('op_driver_salary');
        if($temp == 'on'){
            $gastos ->driver_salary = $request->input('driver_salary');
            $totalGF = $totalGF + $request->input('driver_salary');            
        }
        else {
            $temp = $request->input('driver_salary');
            $gastosN->driver_salary = $request->input('driver_salary');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //carrier1_food
        $temp ="";
        $temp = $request->input('op_carrier1_food');
        if($temp == 'on'){
            $gastos ->carrier1_food = $request->input('carrier1_food');
            $totalGF = $totalGF + $request->input('carrier1_food');
        }
        else {
            $temp = $request->input('carrier1_food');
            $gastosN->carrier1_food = $request->input('carrier1_food');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //carrier1_salary
        $temp ="";
        $temp = $request->input('op_carrier1_salary');
        if($temp == 'on'){
            $gastos ->carrier1_salary = $request->input('carrier1_salary');
            $totalGF = $totalGF + $request->input('carrier1_salary');
        }
        else {
            $temp = $request->input('carrier1_salary');
            $gastosN->carrier1_salary = $request->input('carrier1_salary');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //carrier2_food
        $temp ="";
        $temp = $request->input('op_carrier2_food');
        if($temp == 'on'){
            $gastos ->carrier2_food = $request->input('carrier2_food');
            $totalGF = $totalGF + $request->input('carrier2_food');
        }
        else {
            $temp = $request->input('carrier2_food');
            $gastosN->carrier2_food = $request->input('carrier2_food');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //carrier2_salary
        $temp ="";
        $temp = $request->input('op_carrier2_salary');
        if($temp == 'on'){
            $gastos ->carrier2_salary = $request->input('carrier2_salary');
            $totalGF = $totalGF + $request->input('carrier2_salary');
        }
        else {
            $temp = $request->input('carrier2_salary');
            $gastosN->carrier2_salary = $request->input('carrier2_salary');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //tollbooth
        $temp ="";
        $temp = $request->input('op_tollbooth');
        if($temp == 'on'){
            $gastos ->tollbooth = $request->input('tollbooth');
            $totalGF = $totalGF + $request->input('tollbooth');            
        }
        else {
            $temp = $request->input('tollbooth');
            $gastosN->tollbooth = $request->input('tollbooth');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //iave_tollbooth
        $temp ="";
        $temp = $request->input('op_tollbooth_iave');
        if($temp == 'on'){
            $gastos ->iave_tollbooth = $request->input('iave_tollbooth');
            $totalGF = $totalGF + $request->input('iave_tollbooth');                      
        }
        else {
            $temp = $request->input('iave_tollbooth');
            $gastosN->iave_tollbooth = $request->input('iave_tollbooth');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //maneuvers
        $temp ="";
        $temp = $request->input('op_maneuvers');
        if($temp == 'on'){
            $gastos ->maneuvers = $request->input('maneuvers');
            $totalGF = $totalGF + $request->input('maneuvers');                      
        }
        else {
            $temp = $request->input('maneuvers');
            $gastosN->maneuvers = $request->input('maneuvers');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //passages
        $temp ="";
        $temp = $request->input('op_passages');
        if($temp == 'on'){
            $gastos ->passages = $request->input('passages');
            $totalGF = $totalGF + $request->input('passages');                      
        }
        else {
            $temp = $request->input('passages');
            $gastosN->passages = $request->input('passages');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //permissions 1 and 2
        //$temp ="";
        //$temp = $request->input('op_permissions');
        //if($temp == 'on'){
            $gastos ->permissions = $request->input('permissions1');
            $totalGF = $totalGF + $request->input('permissions1');                      
        //}
        //else {
            //$temp = $request->input('permissions');
            $gastosN->permissions = $request->input('permissions2');
            $totalGnF = $totalGnF + $request->input('permissions2');
        //}
        //*************************************************************************
        //repairs
        $temp ="";
        $temp = $request->input('op_repairs');
        if($temp == 'on'){
            $gastos ->repairs = $request->input('repairs');
            $totalGF = $totalGF + $request->input('repairs');                      
        }
        else {
            $temp = $request->input('repairs');
            $gastosN->repairs = $request->input('repairs');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //parking
        $temp ="";
        $temp = $request->input('op_parking');
        if($temp == 'on'){
            $gastos ->parking = $request->input('parking');
            $totalGF = $totalGF + $request->input('parking');                      
        }
        else {
            $temp = $request->input('parking');
            $gastosN->parking = $request->input('parking');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //spare_parts
        $temp ="";
        $temp = $request->input('op_spare_parts');
        if($temp == 'on'){
            $gastos ->spare_parts = $request->input('spare_parts');
            $totalGF = $totalGF + $request->input('spare_parts');                      
        }
        else {
            $temp = $request->input('spare_parts');
            $gastosN->spare_parts = $request->input('spare_parts');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //mulcts
        $temp ="";
        $temp = $request->input('op_mulcts');
        if($temp == 'on'){
            $gastos ->mulcts = $request->input('mulcts');
            $totalGF = $totalGF + $request->input('mulcts');                      
        }
        else {
            $temp = $request->input('mulcts');
            $gastosN->mulcts = $request->input('mulcts');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //cargo_van
        $temp ="";
        $temp = $request->input('op_cargo_van');
        if($temp == 'on'){
            $gastos ->cargo_van = $request->input('cargo_van');
            $totalGF = $totalGF + $request->input('cargo_van');                      

        }
        else {
            $temp = $request->input('cargo_van');
            $gastosN->cargo_van = $request->input('cargo_van');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //boardinghouse
        $temp ="";
        $temp = $request->input('op_boardinghouse');
        if($temp == 'on'){
            $gastos ->boardinghouse = $request->input('boardinghouse');
            $totalGF = $totalGF + $request->input('boardinghouse');                      
        }
        else {
            $temp = $request->input('boardinghouse');
            $gastosN->boardinghouse = $request->input('boardinghouse');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //agents_commission
        $temp ="";
        $temp = $request->input('op_agents_commission');
        if($temp == 'on'){
            $gastos ->agents_commission = $request->input('agents_commission');
            $totalGF = $totalGF + $request->input('agents_commission');                      
        }
        else {
            $temp = $request->input('agents_commission');
            $gastosN->agents_commission = $request->input('agents_commission');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        //other
        $temp ="";
        $temp = $request->input('op_other');
        if($temp == 'on'){
            $gastos ->other = $request->input('other');
            $totalGF = $totalGF + $request->input('other');                      
        }
        else {
            $temp = $request->input('other');
            $gastosN->other = $request->input('other');
            $totalGnF = $totalGnF + $temp;
        }
        //*************************************************************************
        $TotalKm = "";
        $Km1 = "";
        $gastos ->totalsum = $totalGF;
        $gastosN ->totalsum = $totalGnF;
        $TotalGastos = $totalGnF + $totalGF;
        $Km1 = $request->input('initial_km');
        $TotalKm = $request->input('final_km');
        $TotalKm = $TotalKm - $Km1;
        /*$DS1 = $request->input('diessel_quantity_initial');
        $DS2 = $request->input('diessel_quantity_final');
        $DS3 = $request->input('foreign_diessel');*/
        /*$TotalDsll = $request->input('diessel_quantity_initial');
        $TotalCajas =$request->input('total_boxes');
        $CostPB = $TotalGastos / $TotalCajas;
        $CostPKm = $TotalGastos / $TotalKm;
        $Utili = $request->input('gross_profit');
        $NtUtili = $Utili - $TotalGastos;
        //*************************************************************************
        $gastos->save();
        echo "---Gastos facturados guardados---";
        $gastosN->save();
        echo "---Gastos no-facturados guardados---";
        $Resultados = new Trip_Result();
        $Resultados->id_trip_fact = $factores->id;
        $Resultados->total_expense = $TotalGastos;
        $Resultados->total_boxes = $request->input('total_boxes');
        $Resultados->total_km = $TotalKm;
        //$Resultados->total_diessel = $TotalDsll;
        $Resultados->cost_per_box = $CostPB;
        $Resultados->cost_per_km = $CostPKm;
        $Resultados->gross_profit = $request->input('gross_profit');
        $Resultados->net_gross = $NtUtili;
        $Resultados->save();*/
        //********************************************************
        