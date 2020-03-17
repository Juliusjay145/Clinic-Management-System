<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $doctors_id)
    {
        $this->validate($request,[
          'name' => 'required',
          'email'=>'required',
          'password'=>'required',
          
      ]);
      Doctors::find($doctors_id)->update
        (['name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            
        
        ]);
        return redirect()->route('doctors.index')->with('success','Your dated update successfully!');
    }

    
}
