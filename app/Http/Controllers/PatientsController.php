<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patients;
class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patients::all();
        return view('patients.index', compact('patients'));
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
        return view('patients.create');
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
            'doctors_id'=>'required|string|max:255',
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
    //   dd($request->doc_id);
        Patients::create([
            'doctors_id'=>$request->doctors_id,
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
        return redirect()->route('patients.index')->with('success','Patients created success');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
      $patient = Patients::find($id);
      return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($patients_id)
    {
        $patient = Patients::find($patients_id);
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $patients_id)
    {
        $this->validate($request,[
            'doctors_id' => 'required',
            'symptoms'=>'required',
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
      Patients::find($patients_id)->update
        ([  'doctors_id'=>$request->doctors_id,
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
        return redirect()->route('patients.index')->with('success','Patient update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($patients_id)
    {
        Patients::find($patients_id)->delete();
        return redirect()->route('patients.index')->with('success','Patient deleted success');
    }

}