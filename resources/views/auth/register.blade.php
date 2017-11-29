@extends('layouts.app')

@section('content')
<div class="ui container">
    <div class="ui centered card p-b-20" style="min-width: 400px; margin-top: 130px;">
        <h3 class="ui dividing header m-t-20 m-l-20 m-r-20">Register</h3>
            <form class="ui tiny form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}  
                <div class="field m-l-20 m-r-20">
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name"  type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                         @if ($errors->has('name'))
                            <span class="help-block">
                                   <small style="color: #f42c2c;">{{ $errors->first('name') }}</small>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="field m-l-20 m-r-20">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" name="email" placeholder="Email"  value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <small style="color: #f42c2c;">{{ $errors->first('email') }}</small>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="field m-l-20 m-r-20">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <small style="color: #f42c2c;">{{ $errors->first('password') }}</small>
                                </span>
                            @endif
                    </div>
                </div>

                <div class="field m-l-20 m-r-20">
                    <div class="form-group">
                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button is-light is-pulled-right m-r-20">Register</button>
                </div>
            </form>
        <div class="ui horizontal divider m-l-20 m-r-20">Or</div>
            <div class="ui floating small message m-l-20 m-r-20">
                <small class="m-l-30">Already have an Account?   <a href="{{route('login')}}">Sign in</a></small>
            </div>
    </div>
</div>
@endsection
