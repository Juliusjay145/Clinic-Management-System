@extends('layouts.app')
@section('content')

<div class="row">

        <div class="col-lg-6">

              <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Diagnosed Information</h6>
                </div>
            
                    <div class="card-body">
                        <center>
                            <img style="width: auto; height: 100px; margin-top: 10px; border-radius: 50%" src="data:image/jpeg;base64, {{ $diagnose->patient->profilepic }}" style="border-radius:10px"/>
                        </center>
                    </div>
                
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Firstname : </strong>
                                {{ $diagnose->patient->firstname}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Last Name : </strong>
                                {{ $diagnose->patient->lastname}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Department : </strong>
                                {{ $diagnose->department}}
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ward : </strong>
                                {{ $diagnose->ward}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bed Number : </strong>
                                {{ $diagnose->bed_number}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date of Diagnose : </strong>
                                {{ $diagnose->created_at}}
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