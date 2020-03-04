@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white; margin-bottom: 20px">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left: 10px"> Show Patients Profile</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="button blue" href="{{ route('posts.index') }}"  style="margin-right: 10px"> <i class="fas fa-arrow-left" style="font-size: 20px"></i></a>
        </div>
    </div>
</div>
<div class="container-fluid"><br>
          <!-- Content Row -->
          <div class="row">

            <!-- Border Left Utilities -->
            <div class="col-lg-6">

              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        
                    </div>
                </div>


              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Firstname : </strong>
                        {{ $post->firstname}}
                    </div>
                </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name : </strong>
                        {{ $post->lastname}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender : </strong>
                        {{ $post->gender}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Birthday : </strong>
                        {{ $post->birthday}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Age : </strong>
                        {{ $post->age}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address : </strong>
                        {{ $post->addr}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contact Number : </strong>
                        {{ $post->contactnum}}
                    </div>
                </div>

              

            </div>

            <!-- Border Bottom Utilities -->
            <div class="col-lg-6">

            <div class="card mb-4 py-3 border-bottom-success w3-right" style="width: 200px; margin-left: 25px ">
                <div class="card-body">
                  <strong>Profile Picture : </strong>
                  <center>
                    <img style="width: auto; height: 100px; margin-top: 10px" src="data:image/jpeg;base64, {{ $post->profilepic }}" />
                    </center>
                </div>
              </div>  

              <div class="card mb-4 py-3 border-bottom-warning">
                <div class="card-body">
                  <strong>Symptom Cases: </strong>
                        {{ $post->symptoms}}
                </div>
              </div>

              

              <div class="card mb-4 py-3 border-bottom-danger">
                <div class="card-body">
                   <strong>Bloodtype : </strong>
                    {{ $post->bloodtype}}
                </div>
              </div>


              

            </div>

          </div>

        </div>
@endsection