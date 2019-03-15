@extends('layouts.auth')

@section('content')
    <div class="panel-title-sign mt-xl text-right">
        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
    </div>
    <div class="panel-body">
        <form action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group mb-lg{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>Username</label>
                <div class="input-group input-group-icon">
                    <input name="email" type="text" class="form-control input-lg" />
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                </div>
            </div>

            <div class="form-group mb-lg{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="clearfix">
                    <label class="pull-left">Password</label>
                    <a href="{{ route('password.request') }}" class="pull-right">Lost Password?</a>
                </div>
                <div class="input-group input-group-icon">
                    <input name="password" type="password" class="form-control input-lg" />
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <div class="checkbox-custom checkbox-default">
                        <input id="RememberMe" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <label for="RememberMe">Remember Me</label>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
                </div>
            </div>

            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

            <p class="text-center">Don't have an account yet? <a href="{{route('register')}}">Sign Up!</a>

        </form>
    </div>
@endsection
