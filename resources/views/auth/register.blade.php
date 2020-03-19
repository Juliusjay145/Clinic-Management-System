@extends('layouts.noapp')

@section('content')
<div class="container" style="margin-top: 100px; width:100%" autofucos>
    <div class="row" >
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default">
                <div class="panel-heading bgblue"><img src="{{ asset('/img/heart.png')}}" alt="no logo" class="responsive" style="width: 5%; height: auto;"> <b style="color: white">Clinic Management Registration Form</b></div>

                    

                        <div class="panel-body" >
                            <div class="col-lg-4">
                                
                                <center><img src="{{ asset('/img/register.jpg')}}" alt="no logo" class="responsive" style="width: 100%; height: auto;margin-top:-10px"></center>
                                
                            </div>

                            <div class="col-lg-8">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}" style="" >
                                    {{ csrf_field() }}

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
                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

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
@endsection
