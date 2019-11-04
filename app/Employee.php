<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    public function empDepartment()
    {
        return $this->belongsTo('App\Department', 'dept_id');
    }   


    public function empSalary()
    {
        return $this->belongsTo('App\Salary', 'role_id');
    }


    public function empState()
    {
        return $this->belongsTo('App\State', 'state_id');
    }


    public function empCity()
    {
        return $this->belongsTo('App\City', 'city_id');
    }


    public function empCountry()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }

    public function empGender()
    {
        return $this->belongsTo('App\Gender', 'gender_id');
    }


}
