<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;

class SalariesController extends Controller
{


    public function index()
    {

        $sal = Salary::all();
        return view('organisation_record.salaries.index', compact('sal'));
    }

    
    public function create()
    {
        return view('organisation_record.salaries.create');
    }


    
    public function store(Request $request)
    {
        $sal = $request->validate([
            'pay'   =>  'required',
            'role'  =>  'required',
        ]);

        $sal = new Salary();
        $sal->pay   = $request->input('pay');
        $sal->role  = $request->input('role');
        $sal->save();

        return redirect('/salaries');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $sal = Salary::findOrFail($id);
        
        return view('organisation_record.salaries.edit', compact('sal'));
    }


    public function update(Request $request, $id)
    {
        $sal = $request->validate([
            'pay'  =>  'required',
            'role'  =>  'required',
        ]);

        Salary::whereId($id)->update($sal);
        return redirect('/salaries');

    }


    public function destroy($id)
    {
        $sal = Salary::findOrFail($id);
        $sal->delete();
        return redirect('/salaries');
    }
}
