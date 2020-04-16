@extends('layouts.app')
@section('content')
<div id="page-wrapper" class="w3-panel w3-card-4" style="background: white; margin-bottom: 20px; border-radius:10px;">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left: 10px; margin-top:10px"> Show Patients Profile</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="button blue" href="{{ route('prescriptions.index') }}"  style="margin-right: 10px"> <i class="fas fa-arrow-left" style="font-size: 20px"></i></a>
        </div>
    </div>
</div>
<div class="container-fluid"><br>
          <!-- Content Row -->
          <div class="row">

            <!-- Border Left Utilities -->
            <div class="col-lg-6" style="margin-bottom:20px; margin-top:-20px">
                <div class="card mb-4 py-3 border-bottom-primary w3-panel w3-card-4" style="margin-top:-20px">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="card mb-4 py-3 border-bottom-success w3-right w3-panel w3-card-4" style="width: 200px; margin-left: 25px ">
                        <div class="card-body">
                        <strong>Patients Profile Picture: </strong>
                        <center>
                            <img style="width: auto; height: 100px; margin-top: 10px; border-radius: 50%" src="data:image/jpeg;base64, {{ $prescription->patient->profilepic }}" style="border-radius:10px"/>
                            </center>
                        </div>
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



                </div>    
                
            </div>
        

            <!-- Border Bottom Utilities -->
            <div class="col-lg-6">


              

            </div>

          </div>

        </div>
@endsection