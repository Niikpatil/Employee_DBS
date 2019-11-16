<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'area'      =>  'Phase 1 Infotech Park, Hinjewadi',
            'city'      =>  'Pune',
            'pincode'   =>  '411057',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('cities')->insert([
            'area'      =>  'ITPL Whitefield',
            'city'      =>  'Bengaluru',
            'pincode'   =>  '560066',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('cities')->insert([
            'area'      =>  'Science city Sola',
            'city'      =>  'Ahmedabad',
            'pincode'   =>  '380060',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('cities')->insert([
            'area'      =>  'Infocity',
            'city'      =>  'Gandhinagar',
            'pincode'   =>  '382421',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('cities')->insert([
            'area'      =>  'Thane-Belapur road Airoli',
            'city'      =>  'Mumbai',
            'pincode'   =>  '400708',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('cities')->insert([
            'area'      =>  'The V IT Park Madhapur',
            'city'      =>  'Hyderabad',
            'pincode'   =>  '500081',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('cities')->insert([
            'area'      =>  'Elcot sez sholinganallur',
            'city'      =>  'Chennai',
            'pincode'   =>  '600119',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
        DB::table('cities')->insert([
            'area'      =>  'Phase 2, Industrial Area, Sector 62',
            'city'      =>  'Noida',
            'pincode'   =>  '201301',
            'created_at'   =>  date('Y-m-d H:i:s'),
            'updated_at'   =>  date('Y-m-d H:i:s'),
        ]);
    }
}