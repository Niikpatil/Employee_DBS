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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('contact');
            $table->string('pic');
            $table->date('join_date')->nullable();
            $table->date('birth_date')->nullable();


            // $table->integer('role_id');
            $table->integer('dept_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('gender_id')->unsigned();



            // $table->foreign('role_id')->references('id')->on('salaries');
            $table->foreign('dept_id')->references('id')->on('departments');
            $table->foreign('role_id')->references('id')->on('salaries');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('gender_id')->references('id')->on('genders');


            $table->timestamps();
            $table->softDeletes();
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
