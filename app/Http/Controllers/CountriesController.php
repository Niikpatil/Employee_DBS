<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{


    public function index()
    {
        $nation = Country::all();

        return view("organisation_record.countries.index", compact('nation'));
    }


    
    public function create()
    {
        return view("organisation_record.countries.create");
    }


    
    public function store(Request $request)
    {

        $nation = $request->validate([
            'nation' => 'required|min:5',
        ]);

        $nation = new Country();
                $nation->nation  =   $request->input('nation');
                $nation->save();
        return redirect('/countries');
    }


    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $country = Country::findOrFail($id);

        return view('organisation_record.countries.edit', compact('country'));
    }


    
    public function update(Request $request, $id)
    {
        $country = $request->validate([
            'nation' => 'required|min:4'
        ]);

        Country::whereId($id)->update($country);
        return redirect('/countries');
    }


    
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect('/countries');
    }
}
