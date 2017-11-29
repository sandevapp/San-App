@extends('layouts.manage')

@section('content')
<div class="container">
		<label class="is-size-5">Manage Users</label>
		<a href="{{ route('user.create') }}" class="button is-info is-outlined is-pulled-right m-r-50">
			Create
		</a>
		<h4 class="ui horizontal divider header">
		  <i class="fa fa-list" aria-hidden="true"></i>
		  Account List
		</h4>
		<table class="ui striped table">
	  <thead>
	    <tr>
	      <th>Id</th>
	      <th>Name</th>
	      <th>Account</th>
	      <th>Date</th>
	      <th>Date Modify</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
   		@foreach($user as $user_list)
	      	<tr>
				<td>{{ $user_list->id}}</td>
		      	<td>{{ $user_list->name}}</td>
		      	<td>{{ $user_list->email}}</td>
		      	<td>{{ $user_list->created_at->toFormattedDateString()}}</td>
		      	<td>{{ $user_list->updated_at->toFormattedDateString()}}</td>
		      	<td>
		      		<div class="ui vertical animated button" tabindex="0">
					  <a href="{{route('user.edit', $user_list->id)}}" class="hidden content">Edit</a>
					  <div class="visible content">
					    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					  </div>
					</div>
		      	</td>
		    </tr>
      	@endforeach
	  </tbody>
	</table>
	</div>
@endsection