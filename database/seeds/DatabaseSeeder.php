<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // EmployeeTableSeeder::class,
            CitiesTableSeeder::class,
            GendersTableSeeder::class,

            // Remaining 
            
            StatesTableSeeder::class,
            CountriesTableSeeder::class,
            DivisionTableSeeder::class,
            SalariesTableSeeder::class,
            

            
            ]);
    }
}
