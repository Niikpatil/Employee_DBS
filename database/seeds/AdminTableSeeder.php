<?php

use Illuminate\Database\Seeder;
use App\User as User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  
     * @return void
     */
    public function run()
    {
        User::create( [
            'first_name'    => 'Tony' ,
            'last_name'     => 'Stark' ,
            'name'          => 'IronMan' ,
            'email'         => 'super@admin.com' ,
            'password'      => Hash::make( 'super12345' ) ,
        ] );
    }
}