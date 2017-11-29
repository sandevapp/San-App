@extends('layouts.manage')

@section('content')
<div class="container">
		<div class="ui card create-user-manage">
		  <div class="content">
		    <div class="header">Edit Users</div>
		  </div>
		  <div class="content">
		  	<form class="ui small form" method="post" action="{{ route('user.update', $user->id) }}">
		  	{{csrf_field()}}
		  	<input type="hidden" name="_method" value="PUT">
			  <div class="field">
			    <label>Name</label>
			    <input type="text" name="name" placeholder="Account Name" value="{{$user->name}}">
			  </div>
			  <div class="field">
			    <label>Email</label>
			    <input type="email" name="email" placeholder="Email Address" value="{{$user->email}}">
			  </div>
			  <div class="field">
			    <label>Password</label>
			    <input type="password" name="password" placeholder="Password">
			  </div>
			  <div class="field">
			    <div class="ui checkbox">
			      <input type="checkbox" tabindex="0" class="hidden">
			      <label>I agree to the Terms and Conditions</label>
			    </div>
			  </div>
			  <button class="ui button is-pulled-right" type="submit">Edit user</button>
		  	</form>
		  </div>
		</div>
	</div>
@endsection