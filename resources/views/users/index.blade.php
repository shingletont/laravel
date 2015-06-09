@extends('layouts.default')
@section('content')
		<h1>All Users</h1>

	@if ($users->count())
		@foreach ($users as $user)
			
		<li><a href="http://localhost:8000/users/{{$user->email }}">{{$user->email}}</a></li>


		@endforeach
	@else
		<p>Unfortunately, there are no users.
	@endif
@stop