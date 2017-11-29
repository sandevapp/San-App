@extends('layouts.manage')

@section('content')
<div class="container">
	<label class="is-size-5">View Users Details</label>
		<a href="{{ route('user.edit', $user->id) }}" class="button is-info is-outlined is-pulled-right m-r-50">
			Edit
		</a>
		<h4 class="ui horizontal divider header m-r-50">
		  <i class="fa fa-list" aria-hidden="true"></i>
		  Details
		</h4>
		<div class="ui cards">
		  <div class="card">
		    <div class="content">
		      <div class="header">Account Details</div>
		      <div class="meta">Users</div>
		      <div class="description">
		        <span class="is-size-6">{{$user->name}}</span>
		        <br>
		        <span class="is-size-6">{{$user->email}}</span>
		      </div>
		    </div>
		  </div>
		</div>
@endsection