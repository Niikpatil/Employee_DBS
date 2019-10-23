<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact');
            $table->string('email');
            $table->string('image')->nullable();


            $table->date('join_date')->nullable();
            $table->date('birth_date')->nullable();


            $table->integer('city_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('division_id')->unsigned();
            $table->integer('role_id')->unsigned();


            $table->integer('gender_id')->unsigned();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
