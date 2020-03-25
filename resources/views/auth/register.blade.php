@extends('layouts.noapp')

@section('content')
<div class="container" style="margin-top: 10px; width:100%" autofucos>
    <div class="row" >
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default">
                <div class="panel-heading bgblue"><img src="{{ asset('/img/1staidkit.png')}}" alt="no logo" class="responsive" style="width: 5%; height: auto;"> <b style="color: white">Clinic Management Registration Form</b></div>

                    

                        <div class="panel-body" >
                            <div class="col-lg-4">
                                
                                <center><img src="{{ asset('/img/register.jpg')}}" alt="no logo" class="responsive" style="width: 100%; height: 200%; margin-top:50px"></center>
                                
                            </div>

                            <div class="col-lg-8">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}" style="" >
                                    {{ csrf_field() }}


                                    <div class="form-group{{ $errors->has('profilepic') ? ' has-error' : '' }}" style="margin-right: -125%">
                                        <div class="col-sm-2"> 
                                            
                                        </div>
                                        <div class="col-sm-10">
                                        <label style="margin-left:-16px; margin-top:15px">Profile Picture</label>
                                            <div class="form-group {{$errors->has('profilepic') ? 'has-error' : "" }}" style="color:red; margin-bottom:-5px" > {{ $errors->first('profilepic') }} <!-- <input type="file"
                                            id="avatar" name="profilepic" accept="image/png, image/jpeg">
                                            -->
                                                    <h6 style="color: black"> {!!
                                                    Form::file('profilepic') !!}
                                                </h6>
                                        </div>
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address" class="col-md-4 control-label">Address</label>

                                        <div class="col-md-6">
                                            <input id="address" type="address" class="form-control" name="address" value="{{ old('address') }}" required>

                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('contactno') ? ' has-error' : '' }}">
                                        <label for="contactno" class="col-md-4 control-label">Contact number</label>

                                        <div class="col-md-6">
                                            <input id="contactno" type="contactno" class="form-control" name="contactno" value="{{ old('address') }}" required>

                                            @if ($errors->has('contactno'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('contactno') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('doctortype') ? ' has-error' : '' }}">
                                        <label for="doctortype" class="col-md-4 control-label">doctortype</label>

                                        <div class="col-md-6">
                                            <input id="doctortype" type="doctortype" class="form-control" name="doctortype" value="{{ old('doctortype') }}" required>

                                            @if ($errors->has('doctortype'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('doctortype') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password" class="col-md-4 control-label">Confirm Password</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn button blue" style="color: grey; width:150px">
                                                Register
                                            </button>
                                            <a class="nav-link w3-right" style="text-decoration:none; margin-top:7px" href="{{ url('/login') }}">{{ __('Login here') }}</a>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>

            
        </div>
    </div>
</div>
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
@endsection
