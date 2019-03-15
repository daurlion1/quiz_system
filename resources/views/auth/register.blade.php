@extends('layouts.auth')

@section('content')
    <div class="panel-title-sign mt-xl text-right">
        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-lg">
                <label>Name</label>
                <input name="name" type="text" class="form-control input-lg" value="{{ old('name') }}" required
                       autofocus/>
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg">
                <label>E-mail Address</label>
                <input name="email" type="email" class="form-control input-lg" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-none">
                <div class="row">
                    <div class="col-sm-6 mb-lg">
                        <label>Password</label>
                        <input id="password" name="password" type="password" class="form-control input-lg" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-sm-6 mb-lg">
                        <label>Password Confirmation</label>
                        <input id="password-confirm" type="password" name="password_confirmation" type="password"
                               class="form-control input-lg" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
                </div>
            </div>

            <hr>

            <p class="text-center">Already have an account? <a href={{route('login')}}>Sign In!</a>

        </form>
    </div>
@endsection
