@extends('layouts.app')
@section('content')

      <!-- Begin Page Content -->
        <div class="container-fluid w3-panel w3-card-4" style="border-radius:10px; background-color: white">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top:20px;">
            <h1 class="h3 mb-0 text-gray-800">Create Schedule Appointments</h1>
            
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                 <b>Dr. {{ Auth::user()->name }}</b>
                                                            
          </div>

          <div class="container"></div>


        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 col-xl-9">
                <form method="POST" action="{{ route('tasks.store') }}">
                {{ csrf_field() }}
                    <!--Grid row-->
                    <div class="row">                      

                        <!--Grid column-->
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="contactno" class="">Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="doctortype" style="font-size:1vw;">Appointments or Tasks Description</label>
                                <input type="text" id="task_description" name="task_description" class="form-control">
                                    @if ($errors->has('task_description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('task_description') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="doctortype" style="font-size:1vw;">Select Date Appointments</label>
                                <input type="date" id="task_date" name="task_date" class="form-control">
                                    @if ($errors->has('task_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('task_date') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->

                        
                        <!--Grid column-->
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <input type="text" id="doctors_schedule_id" name="doctors_schedule_id"  class="form-control" value="{{ Auth::user()->id }}" hidden>
                                    @if ($errors->has('doctors_schedule_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('doctors_schedule_id') }}</strong>
                                        </span>
                                    @endif<br>
                                    <button type="submit" class="btn button green" style="color: green; width:150px; margin-top:8px; float:right">
                                        Save
                                    </button>
                            </div>
                        </div>
                        <!--Grid column-->

                        <div class="col-md-6 form-group" style="margin-top:10px">
                        </div>

                        <div class="form-group ">
                            <div class="col-md-6 col-md-offset-4">
                                   

                            </div>
                        </div>

                    </div>
                    <!--Grid row-->
                    
                        
                </form>

                
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 col-xl-3" style="margin-bottom:10px">
                
                    <h6><i class="fa fa-map-marker fa-2x"></i>
                        <p style="font-family: calibri; font-size: 1vw; line-height: 2vw; text-align: justify;">{{ Auth::user()->address }}</p>
                    </h6>

                    <h6><i class="fa fa-phone fa-2x"></i>
                        <p style="font-family: calibri; font-size: 1vw; line-height: 2vw; text-align: justify;">{{ Auth::user()->contactno }}</p>
                    </h6>

                    <h6><i class="fa fa-envelope fa-2x"></i>
                        <p style="font-family: calibri; font-size: 1vw; line-height: 2vw; text-align: justify;">{{ Auth::user()->email }}</p>
                    </h6>
                
            </div>
            <!--Grid column-->

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
@endsection