<?php

use Illuminate\Database\Seeder;
use App\Trip_Result;

class TripResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        trip_Result::create([
        	'id_trip_fact' => '1',
            'total_expense' => '80.15',
            'total_boxes' => '50',
            'total_km' => '30',
            'cost_per_box' => '100',
            'cost_per_km' => '180',
            'gross_profit' => '4000',
            'net_gross' => '3600']);
    }
}
