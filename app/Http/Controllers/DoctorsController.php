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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        return view('doctors.create');
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
      ]);
        Doctors::create([
            'symptoms'=>$request->symptoms
        ]);
        return redirect()->route('doctors.index')->with('success','Doctor created success');
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
    public function edit($doctors_id)
    {
        $doctor = Doctors::find($doctors_id);
        return view('doctors.edit',compact('doctor'));
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
          'symptoms' => 'required',
      ]);
      Doctors::find($doctors_id)->update
        (['symptoms'=>$request->symptoms]);
        return redirect()->route('doctors.index')->with('success','Doctor update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($doctors_id)
    {
        Doctors::find($doctors_id)->delete();
        return redirect()->route('doctors.index')->with('success','Doctor deleted success');
    }

    public function getBloodtypes()
    {
        $bloodtype = DB::table('bloodtype')->pluck("firstname","id");
        return view('posts.create',compact('bloodtype'));
    }
}