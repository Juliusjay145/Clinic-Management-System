@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white; margin-bottom: 20px">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left: 10px"> Doctors Profile</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="button blue" href="{{ route('doctors.index') }}"  style="margin-right: 10px"> <i class="fas fa-arrow-left" style="font-size: 20px"></i></a>
        </div>
    </div>
</div>


<div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <!-- Border Left Utilities -->
            <div class="col-lg-6">

              <div class="card mb-4 py-3 border-bottom-success">
                <div class="card-body">
                  <strong>Lastname: </strong>
                        {{ $doctor->last_name}}
                </div>

                <div class="card-body">
                  <strong>Firstname: </strong>
                        {{ $doctor->first_name}}
                </div>

                <div class="card-body">
                  <strong>Phone no.: </strong>
                        {{ $doctor->phone_no}}
                </div>

                <div class="card-body">
                  <strong>Age: </strong>
                        {{ $doctor->age}}
                </div>

                <div class="card-body">
                  <strong>Address: </strong>
                        {{ $doctor->address}}
                </div>

                <div class="card-body">
                  <strong>State: </strong>
                        {{ $doctor->state}}
                </div>

                <div class="card-body">
                  <strong>Profile Picture : </strong>
                  <center>
                    <img style="width: auto; height: 100px; margin-top: 10px" src="data:image/jpeg;base64, {{ $doctor->profile_pic }}" />
                    </center>
                </div>
              </div>   

            </div>

            <!-- Border Bottom Utilities -->
            <div class="col-lg-6">

              <div class="card mb-4 py-3 border-bottom-warning">
                <div class="card-body">
                  <strong>Doctors Username: </strong>
                        {{ $doctor->docs_username}}
                </div>
              </div>

              <div class="card mb-4 py-3 border-bottom-warning">
                <div class="card-body">
                  <strong>Doctors Password: </strong>
                        {{ $doctor->docs_password}}
                </div>
              </div>

            </div>

          </div>


</div>
@endsection
