@extends('layouts.app')

@section('content')
<div class="ui container">
    <div class="ui centered card p-b-20" style="margin-top: 180px; width: 400px;">
        <h3 class="ui dividing header m-t-20 m-l-20 m-r-20">Reset Password</h3>
             @if (session('status'))
                 <div class="ui positive message">
                    <i class="close icon"></i>
                    <div class="header">{{ session('status') }}</div>
                </div>
            @endif
        <form class="ui tiny form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="field">
                <div class="field m-l-20 m-r-20">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        @if ($errors->has('email'))
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                                <span class="help-block">
                                   <small style="color: #f42c2c;">{{ $errors->first('email') }}</small>
                                </span>
                            @else
                                 <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            @endif
                    </div>
                </div>
                <div class="form-group">
                <button type="submit" class="button is-light is-pulled-right m-r-20">Send Password Reset Link</button>
                </div>
            </div>
            </div>
        </div>
    </div>    
</div>
@endsection
