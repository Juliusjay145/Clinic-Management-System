<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescriptions;
class PrescriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescriptions::all();
        return view('prescriptions.index', compact('prescriptions'));
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
        return view('prescriptions.create');
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
            'pat_pres_id'=>'required|string|max:255',
            'prescriptions'=>'required|string|max:255',
            'profilepic'=>'required',
            'usage'=>'required|string|max:255',
            'quantity'=>'required|string|max:255',

      ]);
    //   dd($request->doc_id);
        Prescriptions::create([
            'pat_pres_id'=>$request->pat_pres_id,
            'prescriptions'=>$request->prescriptions,
            'profilepic'=>base64_encode(file_get_contents($request->file('profilepic')->path())),
            'usage'=>$request->usage,
            'quantity'=>$request->quantity,
        ]);
        return redirect()->route('prescriptions.index')->with('success','Prescription added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
      $prescription = Prescriptions::find($id);
      return view('prescriptions.show',compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($prescription_id)
    {
        $prescription = Prescriptions::find($prescription_id);
        return view('prescriptions.edit',compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $prescription_id)
    {
        $this->validate($request,[
            'pat_pres_id'=>'required',
            'prescriptions'=>'required',
            'profilepic'=>'required',
            'usage'=>'required',
            'quantity'=>'required',
      ]);
      Prescriptions::find($prescription_id)->update
        ([  'pat_pres_id'=>$request->pat_pres_id,
            'prescriptions'=>$request->prescriptions,
            'profilepic'=>base64_encode(file_get_contents($request->file('profilepic')->path())),
            'usage'=>$request->usage,
            'quantity'=>$request->quantity
        
        ]);
        return redirect()->route('prescriptions.index')->with('success','Prescriptions update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($prescription_id)
    {
        Prescriptions::find($prescription_id)->delete();
        return redirect()->route('prescriptions.index')->with('success','Prescriptions deleted success');
    }

}