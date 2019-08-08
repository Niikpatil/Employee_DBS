<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use Validator;
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
        if($request->ajax())
        {
                return datatables()->of(Employee::latest()->get())
                    ->addColumn('action', function($data)   
                    {
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="view btn btn-sm btn-secondary">View</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-sm btn-primary">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-sm btn-danger">Delete</button>';
                        return $button;
                    })
                ->rawColumns(['action'])
                ->make(true);
        }
            return view('employee.index');
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
        $empdata = [
                        'first_name' => 'required|min:3',
                        'last_name'  => 'required|min:3',
                        'image'      => 'required|image|max:2048',
                ];
        $error = Validator::make($request->all(), $empdata);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image      = $request->file('image');
        $new_img    =  rand() . '.' . $image->getClientOriginalExtension();
        $image -> move(public_path('images'), $new_img);

        $form_emp = [
                        'first_name' => $request->first_name,
                        'last_name'  => $request->last_name,
                        'image'      => $new_img
                ];
                
            Employee::create($form_emp);
        return response()->json(['success' => 'Data Added Succesfully.']);
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
            if(request()->ajax())
            {
                $data = Employee::findOrFail($id);
                return response()->json(['data' => $data]);
            }
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($image != '')
        {
            $emp_info = [
                        'first_name' => 'required | min:3',
                        'last_name'  => 'required | min:3',
                        'image'      => 'required | image | max:2048',
                    ];
            $error = Validator::make($request->all(), $emp_info);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            $image_name = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $emp_info = [
                            'first_name' => 'required | min:3',
                            'last_name'  => 'required | min:3',
                    ];
            $error = Validator::make($request->all(), $emp_info);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }
            $form_info = [
                            'first_name' => $request->first_name,
                            'last_name'  => $request->last_name,
                            'image'      => $image_name                            
                    ];
            Employee::whereId($request->hidden_id)->update($form_info);
        return response()->json(['success' => 'Data is successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();
    }
}
