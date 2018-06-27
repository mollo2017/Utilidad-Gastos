<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        person::create([
        	'name' => 'Alex',
            'roll' => 'chofer']);
        person::create([
            'name' => 'Manu',
            'roll' => 'cargador']);
        person::create([
            'name' => 'Victor',
            'roll' => 'cargador']);
        person::create([
            'name' => 'Chino',
            'roll' => 'bodeguero']);
    }
}
