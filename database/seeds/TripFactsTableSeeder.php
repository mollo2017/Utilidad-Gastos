<?php

use Illuminate\Database\Seeder;
use App\Trip_Fact;

class TripFactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	trip_Fact::create(['id_route' => '1',
            'id_truck' => '1',
            'id_driver' => '1',
            'id_carrier1' => '2',
            'id_carrier2' => '3',
            'id_grocer' => '4',
        	'initial_km' => '500',
        	'final_km' => '530',
        	'diessel_quantity_initial' => '100.8',
            'diessel_quantity_final' => '102.8',
        	'loading_date' => '2016-12-31',
            'arrival_date' => '2017-01-02',
        	'weight_conteiner' => '100.8',
        	'volume' => '200',
        	'trip_amount' => '500',
        	'departure_time' => '11:20:45',
        	'arrival_time' => '12:20:45']);
        	
    }
}
