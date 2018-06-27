<?php

use Illuminate\Database\Seeder;
use App\Billed_expense;

class BilledEpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	billed_expense::create
        ([
        	'id_trip' => '1',
            'foreign_diessel' => '400.15',
            'driver_salary' => '500.16',
            'carrier1_salary' => '50',
            'carrier2_salary' => '80.3',
            'tollbooth' => '80.3',
            'iave_tollbooth' => '80.3',
            'maneuvers' => '80.3',
            'passages' => '80.3',
            'permissions' => '80.3',
            'repairs' => '80.3',
            'spare_parts' => '80.3',
            'cargo_van' => '80.3',
            'agents_commission' => '80.3',
            'other' => '80.3',
            'totalsum' => '80.3'
        ]);

        billed_expense::create
        ([
            'id_trip' => '1',
            'foreign_diessel' => '400.15',
            'driver_salary' => '500.16',
            'carrier1_salary' => '50',
            'carrier2_salary' => '80.3',
            'tollbooth' => '80.3',
            'iave_tollbooth' => '80.3',
            'maneuvers' => '80.3',
            'passages' => '80.3',
            'permissions' => '80.3',
            'repairs' => '80.3',
            'spare_parts' => '80.3',
            'cargo_van' => '80.3',
            'agents_commission' => '80.3',
            'other' => '80.3',
            'totalsum' => '80.3'
        ]);
    }
    
    
}
