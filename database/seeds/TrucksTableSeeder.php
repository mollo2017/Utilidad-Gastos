<?php

use Illuminate\Database\Seeder;
use App\Truck;

class TrucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        truck::create(['truck_number' => 'hx2x65smm']);
    }
}
