<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'division'         =>  'HR Manager',
            'department_head'  =>  'Rakesh Borkar',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'division'         =>  'Web Developer',
            'department_head'  =>  'Subhashish Tiwary',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'division'         =>  'BDE',
            'department_head'  =>  'Amruta Ghadge',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'division'         =>  'Business Analyst',
            'department_head'  =>  'Sachin Patil',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'division'         =>  'SEO & Digital Marketing',
            'department_head'  =>  'Shreyash Hirani',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'division'         =>  'Quality Analyst',
            'department_head'  =>  'Vaishanvi Gupta',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'division'         =>  'Content Writer',
            'department_head'  =>  'Devyani Joshi',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'division'         =>  'App Developer',
            'department_head'  =>  'Pritam khandelwal',
            'created_at'       =>  date('Y-m-d H:i:s'),
            'updated_at'       =>  date('Y-m-d H:i:s'),
        ]);
    }
}
