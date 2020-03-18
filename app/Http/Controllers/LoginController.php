<?php

namespace App\Http\Controllers;

use Auth;

use App\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){


    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' => $request->password
    	]))
    	{
    		$user = User::where('email', $request->email)->first();

    		if($user->is_admin())
    		{
    			return redirect()->route('dashboard');
    		}

    			return redirect()->route('home');
    	}

    	return redirect()->back();

	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::all();
        return view('admin.index',compact('admin'));
	}
	
	 //ARI TA HIMO SA ROUTE NATO ARUN MAKA VIEW TAS WEB>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
 /**
     * Show the form for creating a new resource.
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create()
	{
	   return view('admin.create');
   }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name'=>'required',
          'email'=>'required',
          'password'=>'required',
          
      ]);

        User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,

    ]);
        return redirect()->route('admin.index')->with('success', 'admin created successfully');
	}
	
	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id)
    {
      $superadmin = User::find($id);
      return view('admin.show',compact('superadmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superadmin = User::find($id);
        return view('admin.edit',compact('superadmin'));
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
        $this->validate($request,[

			'name'=>'required',
			'email'=>'required',
			'password'=>'required',

      ]);
      User::find($id)->update
        ([  'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        
        ]);
        return redirect()->route('admin.index')->with('success','Doctor update success');
	}
	
	

	 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.index')->with('success','admin deleted success');
    }



}
