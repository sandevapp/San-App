@extends('layouts.app')

@section('content')
<div class="ui container">
<div class="ui centered card is-wide-350" style="margin-top: 180px;">
    <h3 class="ui dividing header m-t-20 m-l-20 m-r-20">Login</h3>
        <form class="ui tiny form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="field">
                <div class="field m-l-20 m-r-20">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        @if ($errors->has('email'))
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                            <span class="help-block">
                                <small style="color: #f42c2c;">{{ $errors->first('email') }}</small>
                            </span>
                        @else
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        @endif
                    </div>
                </div>
                <div class="field m-l-20 m-t-10 m-r-20">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            @if ($errors->has('password'))
                            <input id="password" type="password" name="password" placeholder="Password">
                                <span class="help-block">
                                    <small style="color: #f42c2c;">{{ $errors->first('password') }}</small>
                                </span>
                            @else
                                <input id="password" type="password" name="password" placeholder="Password">
                            @endif
                    </div>
                </div>
                <div class="ui checkbox m-l-20">
                    <div class="form-group">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label><small>Remember me</small></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
            <small class="m-l-100"><a href="{{ route('password.request') }}">Forgot Your Password?</a></small>
              <button type="submit" class="button is-light is-pulled-right m-r-20">login</button>
            </div>
            <div class="ui horizontal divider m-l-20 m-r-20">Or</div>
            <div class="ui floating small message m-l-20 m-r-20 m-b-20">
                <small class="m-l-30">Don't have account? <a href="{{route('register')}}">Register</a></small>
            </div>
            </div>
        </form>
</div>
</div>

@endsection
