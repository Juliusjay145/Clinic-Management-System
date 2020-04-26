@extends('layouts.app')
@section('content')

<div class="row">

        <div class="col-lg-6">

              <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Profile Information</h6>
                </div>

                    <div class="card-body">
                        <div class="card-body">
                            <center>
                                <img style="width: auto; height: 100px; margin-top: -10px; border-radius: 50%" src="data:image/jpeg;base64, {{ $prescription->patient->profilepic }}" style="border-radius:10px"/>
                            </center>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Firstname : </strong>
                                {{ $prescription->patient->firstname}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Last Name : </strong>
                                {{ $prescription->patient->lastname}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Prescriptions : </strong>
                                {{ $prescription->prescriptions}}
                            </div>
                        </div>

                    </div>
            </div>

        </div>

        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Medicine Prescription</h6>
                </div>

                    <div class="card-body">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Prescription Looks like : </strong>
                            <img style="width: auto; height: 100px; margin-top: 10px; border-radius: 50%" src="data:image/jpeg;base64, {{ $prescription->profilepic }}" style="border-radius:10px"/>
                        </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Usage : </strong>
                                {{ $prescription->usage}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Quantity : </strong>
                                {{ $prescription->quantity}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date of Given Prescriptions : </strong>
                                {{ $prescription->created_at}}
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

</div>

@endsection