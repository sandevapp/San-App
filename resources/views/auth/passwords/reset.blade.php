@extends('layouts.app')

@section('content')
<div class="ui container">
    <div class="ui centered card p-b-20" style="width: 400px; margin-top: 180px;">
        <h3 class="ui dividing header m-t-20 m-l-20 m-r-20">Reset Password</h3>
        <form method="POST" action="{{ route('password.request') }}" class="ui tiny form">
            {{ csrf_field() }}
                <div class="field">
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="field m-l-20 m-r-20">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                @if ($errors->has('email'))
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email">
                                    <span class="help-block">
                                        <small style="color: #f42c2c;">{{ $errors->first('email') }}</small>
                                    </span>
                                @else
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email">
                                @endif
                            </div>
                        </div>

                        <div class="field m-l-20 m-r-20">
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

                        <div class="field m-l-20 m-r-20">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                @if ($errors->has('password_confirmation'))
                                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                                    <span class="help-block">
                                        <small style="color: #f42c2c;">{{ $errors->first('password_confirmation') }}</small>
                                    </span>
                                @else
                                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="button is-light is-pulled-right m-r-20">Reset Password</button>
                        </div>
                </div>
        </form>
    </div>
</div>
@endsection
