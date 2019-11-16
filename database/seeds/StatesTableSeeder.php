<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'state_name'  => 'Maharastra',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('states')->insert([
            'state_name'  => 'Karnataka',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('states')->insert([
            'state_name'  => 'Gujarat',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('states')->insert([
            'state_name'  => 'Telangana',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('states')->insert([
            'state_name'  => 'Uttar Pradesh',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('states')->insert([
            'state_name'  => 'Tamil nadu',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
    }
}
