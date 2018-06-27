<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(PoblationsTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(TrucksTableSeeder::class);
        $this->call(TripFactsTableSeeder::class);
        $this->call(BilledEpensesTableSeeder::class);
        $this->call(NotBilledExpensesTableSeeder::class);
        $this->call(TripResultsTableSeeder::class);
        		  //PoblationsTableSeeder
        		//  PoblationsTableSeeder
    }
}
