@extends('layouts.superadminapp')
@section('content')
<div id="page-wrapper" style="background: white; margin-bottom: 20px;  border-radius:10px" class="w3-panel w3-card-4">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left: 10px"> Doctors Profile</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="button blue" href="{{ route('admin.index') }}"  style="margin-right: 10px"> <i class="fas fa-arrow-left" style="font-size: 20px"></i></a>
        </div>
    </div>
</div>


<div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <!-- Border Left Utilities -->
            <div class="col-lg-6">

              <div class="card mb-4 py-3 border-bottom-primary w3-panel w3-card-4" style="margin-top:-20px">
                
                <div class="card-body">
                  <strong>Full Name: </strong>
                        {{ $superadmin->name}}
                </div>

                <div class="card-body">
                  <strong>Email: </strong>
                        {{ $superadmin->email}}
                </div>

               
              </div>   

            </div>


          </div>

</div>
@endsection
