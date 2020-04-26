@extends('layouts.app')
@section('content')

<div class="row">

        <div class="col-lg-6">

              <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Patients Information</h6>
                </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Profile Picture : </strong>
                            </div>
                    </div>
                    <center>
                    <img style="width: auto; height: 100px; margin-top: -10px; margin-bottom: 20px; border-radius: 50%" src="data:image/jpeg;base64, {{ $patient->profilepic }}" style="border-radius:10px"/>
                    </center>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Firstname : </strong>
                                {{ $patient->firstname}}
                            </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Last Name : </strong>
                                {{ $patient->lastname}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gender : </strong>
                                {{ $patient->gender}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Birthday : </strong>
                                {{ $patient->birthday}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Age : </strong>
                                {{ $patient->age}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address : </strong>
                                {{ $patient->addr}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Contact Number : </strong>
                                {{ $patient->contactnum}}
                            </div>
                        </div>

            </div>

        </div>

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Patients Doctor</h6>
                </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Doctor : </strong>
                            <p style="border-style: outset;">
                                <b>&nbsp;Dr.</b> {{ $patient->doctor->name }}</p>
                            </p>    
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Symptom Cases: </strong>
                            {{ $patient->symptoms}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Bloodtype : </strong>
                        {{ $patient->bloodtype}}
                        </div>
                    </div> 
                
            </div>
        </div>

</div>

@endsection