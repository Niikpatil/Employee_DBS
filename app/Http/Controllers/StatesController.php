<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{

    public function index()
    {
        $state = State::all();
        
        return view("organisation_record.states.index", compact('state'));
    }


    public function create()
    {
        return view("organisation_record.states.create");
    }


    public function store(Request $request)
    {
        $states = $request->validate([
            'state' => 'required|min:3'
        ]);
        
        State::Create($states);
        return redirect('/states');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $region = State::findOrFail($id);

        return view('organisation_record.states.edit', compact('region'));
    }


    public function update(Request $request, $id)
    {
        $states = $request->validate([
            'state' => 'required|min:3'
        ]);

        State::whereId($id)->update($states);
        return redirect('/states');
    }


    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $state->delete();

        return redirect('/states');
        
    }
}
