<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctors;
class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctors::all();
        return view('doctors.index',compact('doctors'));
    }

    
    //ARI TA HIMO SA ROUTE NATO ARUN MAKA VIEW TAS WEB>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function postsample()
 {
    return view('doctors.main');
}


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        return view('doctors.create');
    }


      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function alapaap()
      {
        return view('doctors.main');
    }

    //end of the line>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'symptoms'=>'required|string|max:255',
          'firstname'=>'required',
          'lastname'=>'required',
          'profilepic'=>'required',
          'gender'=>'required',
          'bloodtype'=>'required',
          'birthday'=>'required',
          'age'=>'required',
          'addr'=>'required',
          'contactnum'=>'required',
          

      ]);
      Doctors::create([
            'symptoms'=>$request->symptoms,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'profilepic'=>base64_encode(file_get_contents($request->file('profilepic')->path())),
            'gender'=>$request->gender,
            'bloodtype'=>$request->bloodtype,
            'birthday'=>$request->birthday,
            'age'=>$request->age,
            'addr'=>$request->addr,
            'contactnum'=>$request->contactnum
        ]);
        return redirect()->route('doctors.index')->with('success','Post created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
      $doctor = Doctors::find($id);
      return view('doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctors::find($id);
        return view('doctors.edit',compact('doctors'));
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
          'symptoms' => 'required',
          'firstname'=>'required',
          'lastname'=>'required',
          'profilepic'=>'required',
          'gender'=>'required',
          'bloodtype'=>'required',
          'birthday'=>'required',
          'age'=>'required',
          'addr'=>'required',
          'contactnum'=>'required',
      ]);
      Doctors::find($id)->update
        (['symptoms'=>$request->symptoms,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'profilepic'=>base64_encode(file_get_contents($request->file('profilepic')->path())),
            'gender'=>$request->gender,
            'bloodtype'=>$request->bloodtype,
            'birthday'=>$request->birthday,
            'age'=>$request->age,
            'addr'=>$request->addr,
            'contactnum'=>$request->contactnum]);
        return redirect()->route('doctors.index')->with('success','Post update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($id)
    {
        Doctors::find($id)->delete();
        return redirect()->route('doctors.index')->with('success','Post deleted success');
    }

    public function getBloodtypes()
    {
        $bloodtype = DB::table('bloodtype')->pluck("firstname","id");
        return view('doctors.create',compact('bloodtype'));
    }
}