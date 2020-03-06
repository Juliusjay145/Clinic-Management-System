@extends('layouts.noapp')

@section('content')
<body class="bgblue">
<div class="container cardlogin" style="margin-top: 70px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bgblue" style="border-style: black;"><i class="glyphicon glyphicon-plus" style="font-size: 30px; color: red"></i> <b style="color: white">Clinic Management Login</b></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn button blue" style="color: grey">
                                    Login
                                </button>

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