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
            <a class="button blue" href="{{ route('doctors.index') }}"  style="margin-right: 10px"> <i class="fas fa-arrow-left" style="font-size: 20px"></i></a>
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


              

            </div>

            <!-- Border Bottom Utilities -->
            <div class="col-lg-6">


              <div class="card mb-4 py-3 border-bottom-warning">
                <div class="card-body">
                  <strong>Symptom Cases: </strong>
                        {{ $doctor->symptoms}}
                </div>
              </div>

              
              

            </div>

          </div>

        </div>
@endsection