@extends('app')
@section('content')
		<h2>Edit Merch Item </h2>

	{!! Form::model($item, array('route'=> array('merchitem.update', $item->id), 'method' => 'PUT')) !!}
		<div>
			 {!! Form::label('item_name', 'Item Name: ') !!}
			 {!! Form::text('item_name', null, array('class' => 'form-control')) !!}
			 {!! $errors->first('item_name', '<span class=error>:message</span>') !!}
		</div>
		<div>
			{!! Form::label('item_type', 'Item type: ') !!}
			{!! Form::text('item_type') !!}
			 {!! $errors->first('item_type', '<span class=error>:message</span>') !!}
		</div>

		<div>
			{!! Form::label('size', 'Size: ') !!}
			{!! Form::text('size') !!}
			 {!! $errors->first('size', '<span class=error>:message</span>') !!}
		</div>
		<div>
			{!! Form::label('quantity_in_stock', 'Quantity: ') !!}
			{!! Form::number('quantity_in_stock') !!}
			 {!! $errors->first('quantity_in_stock', '<span class=error>:message</span>') !!}
		</div>

		<div>
			{!! Form::label('last_stock_date', 'Stock Date: ') !!}
			{!! Form::date('last_stock_date') !!}
			 {!! $errors->first('last_stock_date', '<span class=error>:message</span>') !!}
		</div>
		<div>{!! Form::submit() !!}</div>
	{!! Form::close() !!}



@stop