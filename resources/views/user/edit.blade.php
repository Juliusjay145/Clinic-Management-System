@extends('layouts.app')
@section('content')

      <!-- Begin Page Content -->
        <div class="container-fluid w3-panel w3-card-4" style="border-radius:10px; background-color: white">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top:20px;">
            <h1 class="h3 mb-0 text-gray-800">Profile Update</h1>
            
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
                <form method="POST" action="{{ route('user.update') }}">
                {{ csrf_field() }}
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 form-group">
                            <div class="md-form">
                                <label for="name" class="">Profile Picture</label>
                                <div class="form-group {{$errors->has('profilepic') ? 'has-error' : "" }}" style="color:red; margin-bottom:-5px"> {{ $errors->first('profilepic') }}
                                    <h6 style="color: black"> {!!
                                        Form::file('profilepic') !!}
                                    </h6>
                                </div>
                                
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 form-group">
                            <div class="md-form">
                                <label for="name" class="">Name</label>
                                <input type="text" id="name" value="{{ Auth::user()->name }}" name="name" class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="address" class="">Address</label>
                                <input type="text" id="address" value="{{ Auth::user()->address }}" name="address" class="form-control">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="contactno" class="">Contact Number</label>
                                <input type="text" id="contactno" value="{{ Auth::user()->contactno }}" name="contactno" class="form-control">
                                    @if ($errors->has('contactno'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contactno') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="doctortype" class="">Doctor Type</label>
                                <input type="text" id="doctortype" value="{{ Auth::user()->doctortype }}" name="doctortype" class="form-control">
                                    @if ($errors->has('doctortype'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('doctortype') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->
                                
                        <!--Grid column-->
                        <br>
                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="email" class="">Email</label>
                                <input type="text" id="email" value="{{ Auth::user()->email }}" name="email" class="form-control" autofucos>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <!--Grid column-->

                        <div class="col-md-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-top:10px">
                            <div class="md-form">
                                <label for="email" class="">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:10px">
                            <div class="md-form">
                                <label for="password-confirm" class="">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                
                            </div>
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:10px">
                        </div>

                        <div class="form-group ">
                            <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn button green" style="color: green; width:150px; ">
                                        Save
                                    </button>

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