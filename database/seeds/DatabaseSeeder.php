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
            CitiesTableSeeder::class,
            GendersTableSeeder::class,
            StatesTableSeeder::class,
            CountriesTableSeeder::class,
            DivisionTableSeeder::class,
            SalariesTableSeeder::class,
            AdminTableSeeder::class,
        ]);
    }
}
