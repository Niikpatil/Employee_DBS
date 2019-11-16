<?php

use Illuminate\Database\Seeder;

class SalariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salaries')->insert([
            'role'          =>  'Trainee',
            'pay'           =>  '15000',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'updated_at'    =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('salaries')->insert([
            'role'          =>  'Junior',
            'pay'           =>  '24000',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'updated_at'    =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('salaries')->insert([
            'role'          =>  'Associate',    
            'pay'           =>  '30000',
            'created_at'    =>  date('Y-m-d H:i:s'),
            'updated_at'    =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('salaries')->insert([
            'role'         =>  'Senior',
            'pay'          =>  '40000',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
    }
}
