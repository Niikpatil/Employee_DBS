<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Employee;
// use Datatables;



class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->ajax()){

        return datatables()->of(Employee::latest()->get())
                    ->addColumn('action', function($data)   {

                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
                }
        
        return view('employee.index');










        // $employee = Employee::all();

        // return DataTables::of($employee)
        //                 ->addIndexColumn()
        //                 ->addColumn('action', function($row){

        //                     $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
        //                     return $btn;


        //                 })
        //                 ->rowColumns(['action'])
        //                 ->make(true);
        // }

        //     return view('employee.index');
    }                

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $empdata = $request->validate([
        //             'first_name' => 'required | min:3',
        //             'last_name'  => 'required | min:3',
        //             'gender'     => 'gender | max:7',
        // ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
