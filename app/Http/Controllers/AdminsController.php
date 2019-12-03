<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();

        return view("admin.index", compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name'   =>  'required | min:3 | max:20',
            'last_name'    =>  'required | min:3 | max:20',
            'email'        =>  'required | email | unique:users,email',
            'user_name'    =>  'required | min:3 | max:20',
            'password'     =>  'required | min:6',
            'a_pic'       =>  'image | mimes:jpeg,png,jpg | max:3000'
        ]);

            $admin_data = new Admin();
            $admin_data->first_name  =  $request->input('first_name');
            $admin_data->last_name   =  $request->input('last_name');
            $admin_data->email       =  $request->input('email');
            $admin_data->user_name   =  $request->input('user_name');
            $admin_data->password    =  $request->input('password');

            if ($request->hasFile('a_pic'))
            {
                $file = $request->file('a_pic');
                $extention = $file->getClientOriginalExtention();
                $pic_name = time().'_' . '.' .$extention;

                $file = move(public_path('images/admin'), $pic_name);
                $admin_data->a_pic = $pic_name;
            }

        $admin_data->save();
        return redirect('admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::findOrFail($id);

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
        $admin = Admin::findOrFail($id);

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
        $update_pic  =  $request->hidden_apic;
        $a_pic       =  $request->file('a_pic');

            if ($a_pic != '')
            {
                $request->validate([
                    'first_name'   =>  'required | min:3 | max:20',
                    'last_name'    =>  'required | min:3 | max:20',
                    'email'        =>  'required | email | unique:users,email',
                    'user_name'    =>  'required | min:3 | max:20',
                    'password'     =>  'required | min:6',
                    'a_pic'        =>  'image | mimes:jpeg,png,jpg | max:3000'
                ]);
                
                
                $extention  =  $a_pic->getClientOriginalExtension();
                $update_pic = time(). '-' . '.' .$extention;
                $a_pic->move(public_path('images\admin'), $update_pic);
            }
        
        Admin::whereId($id)->update([
            'first_name' =>  $request->input('first_name'),
            'last_name'  =>  $request->input('last_name'),
            'user_name'  =>  $request->input('user_name'),
            'email'      =>  $request->input('email'),
            'password'   =>  $request->input('password'),
            'a_pic'      =>  $update_pic,
        ]);

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Admin::findOrFail($id)->delete();
        return redirect('admin');
    }
}
