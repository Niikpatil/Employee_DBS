<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{

    public function index()
    {
        $city = City::all();

        return view("organisation_record.cities.index", compact('city'));
    }


    public function create()
    {
        return view("organisation_record.cities.create");
    }


    public function store(Request $request)
    {
        $city = $request->validate([
            'area' => 'required',
            'city' => 'required',
            'pincode' => 'required'
        ]);

        City::Create($city);
        return redirect('/cities');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $city = City::findOrFail($id);

        return view('organisation_record.cities.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $city = $request->validate([
            'area' => 'required',
            'city' => 'required',
            'pincode' => 'required',
        ]);

        City::whereId($id)->update($city);
        return redirect('cities');

    }


    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect('/cities');
    }
}
