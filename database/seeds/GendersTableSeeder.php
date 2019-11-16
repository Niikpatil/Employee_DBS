<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            'gender_name'  =>  'male',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('genders')->insert([
            'gender_name'  =>  'female',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
    }
}
