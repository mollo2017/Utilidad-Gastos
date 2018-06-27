<?php

use Illuminate\Database\Seeder;
use App\Route;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create(['route_number' => '2']);
        Route::create(['route_number' => '3']);
        Route::create(['route_number' => '4']);
        Route::create(['route_number' => '5']);
        Route::create(['route_number' => '6']);
        Route::create(['route_number' => '7']);
        Route::create(['route_number' => '8']);
        Route::create(['route_number' => '9']);
        Route::create(['route_number' => '10']);
        Route::create(['route_number' => '11']);
        Route::create(['route_number' => '12']);
        Route::create(['route_number' => '13']);
        Route::create(['route_number' => '14']);
        //Route::create(['route_number' => '15']);
        Route::create(['route_number' => '16']);
        Route::create(['route_number' => '17']);
        Route::create(['route_number' => '18']);
        Route::create(['route_number' => '19']);
        Route::create(['route_number' => '20']);
        Route::create(['route_number' => '30']);
        Route::create(['route_number' => '31']);
        Route::create(['route_number' => '35']);
    }
}
