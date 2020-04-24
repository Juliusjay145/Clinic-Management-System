<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DischargePatient;
class DischargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dischargepatients = DischargePatient::all();
        return view('dischargepatients.index', compact('dischargepatients'));
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
        return view('dischargepatients.create');
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
            'pat_discharge_id'=>'required|string|max:255',
            'bed_days'=>'required|string|max:255',
            'charges'=>'required',

      ]);
    //   dd($request->doc_id);
    DischargePatient::create([
            'pat_discharge_id'=>$request->pat_discharge_id,
            'bed_days'=>$request->bed_days,
            'charges'=>$request->charges,
        ]);
        return redirect()->route('dischargepatients.index')->with('success','Patient Discharge successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
      $dischargepatient = DischargePatient::find($id);
      return view('dischargepatients.show',compact('dischargepatient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($discharge_id)
    {
        $dischargepatient = DischargePatient::find($discharge_id);
        return view('dischargepatients.edit',compact('dischargepatient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $discharge_id)
    {
        $this->validate($request,[
            'pat_discharge_id'=>'required',
            'bed_days'=>'required',
            'charges'=>'required',
            
      ]);
      DischargePatient::find($discharge_id)->update
        ([  'pat_discharge_id'=>$request->pat_discharge_id,
            'bed_days'=>$request->bed_days,
            'charges'=>$request->charges
        
        ]);
        return redirect()->route('dischargepatients.index')->with('success','Patient Discharge Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($discharge_id)
    {
        DischargePatient::find($discharge_id)->delete();
        return redirect()->route('dischargepatients.index')->with('success','Discharge Patient Deleted Success');
    }

}