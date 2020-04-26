@extends('layouts.app')
@section('content')

<div class="row">

        <div class="col-lg-6">

              <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Discharge Information</h6>
                </div>
            
                    
                    <div class="card-body">
                    <center>
                        <img style="width: auto; height: 100px; margin-top: 10px; border-radius: 50%" src="data:image/jpeg;base64, {{ $dischargepatient->patient->profilepic }}" style="border-radius:10px"/>
                        </center>
                    </div>
                

                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Firstname : </strong>
                                {{ $dischargepatient->patient->firstname}}
                            </div>
                        </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Last Name : </strong>
                                {{ $dischargepatient->patient->lastname}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Patients ID : </strong>
                                {{ $dischargepatient->pat_discharge_id}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Number of Days In Bed : </strong>
                                {{ $dischargepatient->bed_days}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Charges : </strong>
                                {{ $dischargepatient->charges}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date of Discharge : </strong>
                                {{ $dischargepatient->created_at}}
                            </div>
                        </div>

            </div>

        </div>

        <!-- <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Medicine Prescription</h6>
                </div>
            </div>
        </div> -->

</div>

@endsection