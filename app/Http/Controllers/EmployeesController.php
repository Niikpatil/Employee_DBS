<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Employee;
use App\Department;
use App\Country;
use App\City;
use App\State;
use App\Salary;
use App\Gender;
// use DB;


class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $emp_data = Employee::orderBy('first_name', 'asc')->paginate(5);
        return view('employee.index')->with([
                'emp_data' =>  $emp_data,
        ]);
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
        $genders = Gender::orderBy('gender_name', 'desc')->get();

        return view('employee.create')->with([
                'division'     =>  $departments,
                'state_name'   =>  $states,
                'cities'       =>  $cities,
                'countries'    =>  $countries,
                'salaries'     =>  $salaries,
                'gender_name'  =>  $genders,
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
            'first_name'   =>  'required | min:3 | max:20',
            'last_name'    =>  'required | min:3 | max:20',
            'pic'          =>  'required | image | mimes:jpeg,png,jpg | max:3000',
            'email'        =>  'required | email | unique:users,email',
            'contact'      =>  'required',
            'division'     =>  'required',
            'role'         =>  'required',
            'state_name'   =>  'required',
            'city'         =>  'required',
            'country'      =>  'required',
            'gender_name'  =>  'required',
        ]);

        $emp_data = new Employee();
        $emp_data->first_name  =  $request->input('first_name');
        $emp_data->last_name   =  $request->input('last_name');
        $emp_data->email       =  $request->input('email');
        $emp_data->contact     =  $request->input('contact');
        $emp_data->dept_id     =  $request->input('division');
        $emp_data->role_id     =  $request->input('role');
        $emp_data->state_id    =  $request->input('state_name');
        $emp_data->city_id     =  $request->input('city');
        $emp_data->country_id  =  $request->input('country');
        $emp_data->gender_id   =  $request->input('gender_name');

        if($request->hasFile('pic'))
        {
            // To Get file full name (With extention)
            $file = $request->file('pic');
            $extension = $file->getClientOriginalExtension();

            // To append the timpstamp within file name
            $pic_name = rand() . '_' .md5(time()). '_' . '.' .$extension;

            $file->move(public_path('images/emp'), $pic_name);
            $emp_data->pic = $pic_name;
        }

        $emp_data->save();
        return redirect('/employee');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $data = Employee::findOrFail($id);
        // return view('employee.show', compact('data'));

        $departments = Department::orderBy('division', 'asc')->get();
        $states = State::orderBy('state_name', 'asc')->get();
        $cities = City::orderBy('city', 'asc')->get();
        $countries = Country::orderBy('nation', 'asc')->get();
        $salaries = Salary::orderBy('pay', 'asc')->get();
        $genders = Gender::orderBy('gender_name', 'desc')->get();
        $data = Employee::findOrFail($id);

        return view('employee.show')->with([

                'division'     =>  $departments,
                'state_name'   =>  $states,
                'cities'       =>  $cities,
                'countries'    =>  $countries,
                'salaries'     =>  $salaries,
                'gender_name'  =>  $genders,
                'data'         =>  $data,

        ]);  


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::orderBy('division', 'asc')->get();
        $states = State::orderBy('state_name', 'asc')->get();
        $cities = City::orderBy('city', 'asc')->get();
        $countries = Country::orderBy('nation', 'asc')->get();
        $salaries = Salary::orderBy('pay', 'asc')->get();
        $genders = Gender::orderBy('gender_name', 'desc')->get();
        $employee = Employee::findOrFail($id);

        return view('employee.edit')->with([
                'division'     =>  $departments,
                'state_name'   =>  $states,
                'cities'       =>  $cities,
                'countries'    =>  $countries,
                'salaries'     =>  $salaries,
                'gender_name'  =>  $genders,
                'employee'     =>  $employee,
        ]);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $pic_update  =  $request->hidden_pic;
        $pic         =  $request->file('pic');

            if($pic != '')
            {
                $request->validate([
                    'first_name'   =>  'required | min:3 | max:20',
                    'last_name'    =>  'required | min:3 | max:20',
                    'pic'          =>  'required | image | mimes:jpeg,png,jpg | max:3000',
                    'email'        =>  'required | email | unique:users,email',
                    'contact'      =>  'required',
                    'division'     =>  'required',
                    'role'         =>  'required',
                    'state_name'   =>  'required',
                    'city'         =>  'required',
                    'country'      =>  'required',
                    'gender_name'  =>  'required',
                ]);

            $extention  =  $pic->getClientOriginalExtension();
            $pic_update =  rand() . '_' .time(). '_' . '.' .$extention;
            $pic->move(public_path('images/emp'), $pic_update);
        }

        Employee::whereId($id)->update([
            'first_name'  =>  $request->input('first_name'),
            'last_name'   =>  $request->input('last_name'),
            'email'       =>  $request->input('email'),
            'contact'     =>  $request->input('contact'),
            'dept_id'     =>  $request->input('division'),
            'role_id'     =>  $request->input('role'),
            'state_id'    =>  $request->input('state_name'),
            'city_id'     =>  $request->input('city'),
            'country_id'  =>  $request->input('country'),
            'gender_id'   =>  $request->input('gender_name'),
            'pic'         =>  $pic_update,
        ]);

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
        return redirect('/employee');
    }
}
