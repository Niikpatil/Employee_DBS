<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 10)->create();
    }
}
