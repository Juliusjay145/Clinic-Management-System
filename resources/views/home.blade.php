@extends('layouts.app')
@section('content')

      <!-- Begin Page Content -->
        <div class="container-fluid w3-panel w3-card-4" style="border-radius:10px">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top:20px;">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                  @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                  @endif
                  Welcome Back Doctor<b style="margin-left:-18%">{{ Auth::user()->name }}</b>
            <a href="{{ url('/patients/create') }}" class="button green"><i class="fas fa-plus fa-sm text-green-50" ></i> Add Patient</a>


                                                            
          </div>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary w3-panel w3-card-4 h-80 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ url('/patients') }}" style="text-decoration:none">
              <div class="card border-left-success w3-panel w3-card-4 py-2" style="height:110px">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Patients</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{ url('/tasks/create') }}" style="text-decoration:none">
              <div class="card border-left-info w3-panel w3-card-4 h-90 py-2" style="height:110px">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Calendar</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">Add Appointments</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar text-gray-300" style="font-size:20px"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <!-- Pending Requests Card Example -->
            
               <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('/patients') }}" style="text-decoration:none">
                  <div class="card border-left-warning w3-panel w3-card-4 h-90 py-2" style="height:110px">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Show Over all Patients</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                 </a>
                </div>

                
            
          </div>
          


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
@endsection