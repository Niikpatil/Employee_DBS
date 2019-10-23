<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\City;
use App\State;
use App\Country;
use App\Salary;
// use App\Gender;



class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('employee.index');
    }                

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division = Department::orderBy('division', 'asc')->get();
        $state = State::orderBy('state', 'asc')->get();
        $city = City::orderBy('city', 'asc')->get();
        $country = Country::orderBy('nation', 'asc')->get();
        $salary = Salary::orderBy('pay', 'asc')->get();
        // $genders = Gender::orderBy('')->get();

        return view('employee.create')->with([
                'division'  =>  $division,
                'states'   => $state,
                'cities'   => $city,
                'countries'   => $country,
                'salaries'   => $salary,
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()  
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
