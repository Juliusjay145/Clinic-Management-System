@extends('layouts.noapp')

@section('content')
<body class="bgblue">
<div class="container cardlogin" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" > 
            <!-- style="background-image: url('/img/login.jpg');" -->
                <div class="panel-heading bgblue" style="border-style: black"> <b style="color: white"><img src="{{ asset('/img/1staidkit.png')}}" alt="no logo" class="responsive" style="width: 5%; height: auto;"> Clinic Management Login</b></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login.custom') }}">
                        {{ csrf_field() }}
                        <center><img src="{{ asset('/img/login.png')}}" alt="no logo" class="responsive" style="width: 70%; height: auto;margin-top:-50px"></center>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-top:-10px">
                        
                            <label for="email" class="col-md-4 control-label"> E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <button type="submit" class="btn button blue" style="color: grey; float:right; width:50%">
                                    Login
                                </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>

                                <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration:none">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                            <a class="nav-link w3-right" href="{{ url('/register') }}" style="text-decoration:none">{{ __('Register here') }}</a></h4>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection