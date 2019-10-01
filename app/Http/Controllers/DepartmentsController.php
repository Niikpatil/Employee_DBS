<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;


class DepartmentsController extends Controller
{
    
    public function index()
    {
        $department = Department::all();

        return view('organisation_record.departments.index', compact('department'));
    }


    public function create()
    {
        return view('organisation_record.departments.create');
    }


    public function store(Request $request)
    {
        $department = $request->validate([
            'division'=>'required',
            'department_head'=>'required',
        ]);

        Department::create($department);
        return redirect('/department');
    }



    public function show($id)
    {

    }


    public function edit($id)
    {
        $dept = Department::findOrFail($id);
        return view('organisation_record.departments.edit', compact('dept'));
    }


    public function update(Request $request, $id)
    {
        $deptdata = $request->validate([
            'division'=>'required',
            'department_head'=>'required',
        ]);

        Department::whereId($id)->update($deptdata);
        return redirect('/department');
    }


    public function destroy($id)
    {
        $dept = Department::findOrFail($id);
        $dept->delete();

        return redirect('/department');
    }
}
