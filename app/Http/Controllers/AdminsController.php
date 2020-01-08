<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use App\User;

class AdminsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::all();

        return view("admin.index", compact('admin'));
    }


    public function show($id)
    {
        $admin = Auth::user();

        return view("admin.show", compact('admin'));
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $admin = Auth::user();

        return view("admin.edit", compact('admin'));
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

        // dd($request->all());

        $update_pic  =  $request->hidden_apic;
        $admin_pic   =  $request->file('admin_pic');

            if ($admin_pic != '')
            {
                $request->validate([
                    'first_name'   =>  'required | min:3 | max:20',
                    'last_name'    =>  'required | min:3 | max:20',
                    'name'         =>  'required', 'string', 'max:255',
                    'email'        =>  'required', 'string', 'email', 'max:255', 'unique:users',
                    'admin_pic'    =>  'image | mimes:jpeg,png,jpg | max:3000'
                ]);

                $extention  =  $admin_pic->getClientOriginalExtension();
                $update_pic = time(). '-' . '.' .$extention;
                $admin_pic->move(public_path('images\admin'), $update_pic);
            }
        
        Auth::user()->update([
            'first_name' =>  $request->input('first_name'),
            'last_name'  =>  $request->input('last_name'),
            'name'       =>  $request->input('name'),
            'email'      =>  $request->input('email'),
            'admin_pic'  =>  $update_pic,
            // 'password'   =>  $request->input('password'),

        ]);

        return redirect('admin');
    }

}
