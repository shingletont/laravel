@extends('app')
@section('content')



<table class="table table-hover">
		<tr>
			<td>{{$item->item_name}}</td>
			<td>{!! $item->item_type !!}</td>
			<td>{!! $item->size !!}</td>				
			<td>{!! $item->quantity_in_stock !!}</td>
			<td>{!! $item->last_stock_date !!}</td>
		</tr>
<table>