<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnosis;
class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosis = Diagnosis::all();
        return view('diagnosis.index', compact('diagnosis'));
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
        return view('diagnosis.create');
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
            'pat_diag_id'=>'required|string|max:255',
            'department'=>'required|string|max:255',
            'ward'=>'required',
            'bed_number'=>'required|string|max:255',

      ]);
    //   dd($request->doc_id);
        Diagnosis::create([
            'pat_diag_id'=>$request->pat_diag_id,
            'department'=>$request->department,
            'ward'=>$request->ward,
            'bed_number'=>$request->bed_number,
        ]);
        return redirect()->route('diagnosis.index')->with('success','Patients Diagnosis added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
      $diagnose = Diagnosis::find($id);
      return view('diagnosis.show',compact('diagnose'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($diagnosis_id)
    {
        $diagnosis = Diagnosis::find($diagnosis_id);
        return view('diagnosis.edit',compact('diagnosis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $diagnosis_id)
    {
        $this->validate($request,[
            'pat_diag_id'=>'required',
            'department'=>'required',
            'ward'=>'required',
            'bed_number'=>'required',
      ]);
      Diagnosis::find($diagnosis_id)->update
        ([  'pat_diag_id'=>$request->pat_diag_id,
            'department'=>$request->department,
            'ward'=>$request->ward,
            'bed_number'=>$request->bed_number
        
        ]);
        return redirect()->route('diagnosis.index')->with('success','Diagnosis update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($diagnosis_id)
    {
        Diagnosis::find($diagnosis_id)->delete();
        return redirect()->route('diagnosis.index')->with('success','Prescriptions deleted success');
    }

}