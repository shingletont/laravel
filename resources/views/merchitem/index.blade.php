
@extends('app')
@section('content')
		<h1>All Items</h1>

	@if ($items->count())
		@foreach ($items as $item)
			
		<li><a href="http://localhost:8000/merchitem/{{$item->item_name }}">{{$item->item_name}}</a></li>


		@endforeach
	@else
		<p>Unfortunately, there are no items.
	@endif
@stop