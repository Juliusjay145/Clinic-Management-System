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
                'address'=>'required',
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
