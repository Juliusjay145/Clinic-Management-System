<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userupdatemethod()
    {
        return view('userupdates.edit');
    }

    public function edit(){
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else{
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'profilepic' => 'required',
                'name' => 'required',
                'email'=>'required',
                'address'=>'required',
                'contactno'=>'required',
                'doctortype'=>'required',
                'password'=>'required|confirmed|min:6',

      ]);
    //   dd($request->doc_id);
        User::create([
        
            'profilepic'=>base64_encode(file_get_contents($request->file('profilepic')->path())),
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'contactno'=>$request->contactno,
            'doctortype'=>$request->doctortype,
            'password'=>$request->password    
            
        ]);
        return redirect()->route('admin.index')->with('success','admin created success');
    }

    public function update(Request $request){
        $user = User::find(Auth::user()->id);
        if ($user) {
            
            $this->validate($request,[
                'profilepic' => 'required',
                'name' => 'required',
                'email'=>'required',
                'address'=>'required',
                'contactno'=>'required',
                'doctortype'=>'required',
                'password'=>'required|confirmed|min:6',
            ]);

            $user->profilepic = $request['profilepic'];
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->address = $request['address'];
            $user->contactno = $request['contactno'];
            $user->doctortype = $request['doctortype'];
            $user->password = bcrypt($request['password']);
            

            $user->save();

            return redirect()->back();
        }
    }






}
