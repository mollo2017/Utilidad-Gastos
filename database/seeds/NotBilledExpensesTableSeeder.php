<?php

use Illuminate\Database\Seeder;
use App\Not_Billed_expense;

class NotBilledExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        id_trip
driver_food
carrier1_food
carrier2_food
permissions
boardinghouse
parking
cargo_van
maneuvers
repairs
other
mulcts
totalsum*/
        not_billed_expense::create
        ([
        	'id_trip' => '1',
            'driver_food' => '50.3',
            'carrier1_food' => '50.3',
            'carrier2_food' => '50.3',
            'maneuvers' => '50.3',
            'permissions' => '50.3',
            'repairs' => '50.3',
            'mulcts' => '50.3',
            'parking' => '80.3',
            'cargo_van' => '50.3',
            'boardinghouse' => '50.3',
            'other' => '50.3',
            'totalsum' => '50.3'
        ]);
    }
}
