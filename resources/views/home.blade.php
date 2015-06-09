

@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Merchandise Item List</div>

				<div class="panel-body">
					
						@if ($items->count())
						<table class="table table-hover">
		<tr>
			<th>Item Name</th>
			<th>Item Type</th>
			<th>Size</th>
			<th>Quantity</th>
			<th>Last Stock Date</th>
		</tr>
		@foreach ($items as $item)

		<tr>
			<td><a href="http://localhost:8000/merchitem/{{$item->id }}/edit/">{{$item->item_name}}</a></td>
			<td>{!! $item->item_type !!}</td>
			<td>{!! $item->size !!}</td>				
			<td>{!! $item->quantity_in_stock !!}</td>
			<td>{!! $item->last_stock_date !!}</td>
		</tr>


		@endforeach
	</table>
	@else
		<p>Unfortunately, there are no items.
	@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
