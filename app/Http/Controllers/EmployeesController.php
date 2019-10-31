<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Country;
use App\City;
use App\State;
use App\Salary;
use DB;
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

        $departments = Department::orderBy('division', 'asc')->get();
        $states = State::orderBy('state_name', 'asc')->get();
        $cities = City::orderBy('city', 'asc')->get();
        $countries = Country::orderBy('nation', 'asc')->get();
        $salaries = Salary::orderBy('pay', 'asc')->get();
        // $genders = Gender::orderBy('')->get();

        return view('employee.create')->with([
                'division'    =>    $departments,
                'state_name'  =>    $states,
                'cities'      =>    $cities,
                'countries'   =>    $countries,
                'salaries'    =>    $salaries,
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

        $emp_data = $request->validate([
            'first_name' => 'required | min:3 | max:20',
            'last_name'  => 'required | min:3 | max:20',
            'email'      => 'required',
            'contact'    => 'required',


            'division'  => 'required',
            'role'      => 'required',
            'state'     => 'required',
            'city'      => 'required',
            'country'   => 'required',
        ]);


        $emp_data = new Employee();

        $emp_data ->first_name  = $request->input('first_name');
        $emp_data ->last_name   = $request->input('last_name');
        $emp_data ->email       = $request->input('email');
        $emp_data ->contact     = $request->input('contact');
        $emp_data ->dept_id    = $request->input('division');
        $emp_data ->role_id        = $request->input('role');
        $emp_data ->state_id       = $request->input('state');
        $emp_data ->city_id        = $request->input('city');
        $emp_data ->country_id     = $request->input('country');

        $emp_data->save();

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
