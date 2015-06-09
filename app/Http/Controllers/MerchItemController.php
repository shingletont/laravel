<?php namespace App\Http\Controllers;

use Session;
use Hash;
use Validator;
use Redirect;
use View;
use Input;
use \App\MerchItem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MerchItemController extends Controller {


		public function __construct(MerchItem $item)
	{
		$this->item = $item;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = MerchItem::all();
		return view('home', ['items'=>$items]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('merchitem.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		if ( ! $this->item->fill($input)->isValid())
		{

			return Redirect::back()->withInput()->withErrors($this->item->errors);

		}

		$this->item->save();

		return Redirect::route('merchitem.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		        // get the nerd
        	$item = MerchItem::find($id);

        // show the view and pass the nerd to it
		return View::make('merchitem.show', ['item'=>$item]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$items = MerchItem::all();   // select * from users
 	$item = MerchItem::find($id);
 	return View::make('merchitem.edit', ['item'=>$item]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		if ( ! $this->item->fill($input)->isValid())
		{

			return Redirect::back()->withInput()->withErrors($this->item->errors);

		}

		else{

			$item = MerchItem::find($id);
			$item->item_name = Input::get('item_name');
			$item->item_type = Input::get('item_type');
			$item->size = Input::get('size');
			$item->quantity_in_stock = Input::get('quantity_in_stock');
			$item->last_stock_date = Input::get('last_stock_date');
			$item->save();

			Session::flash('message', 'Successfully updated item!');
            return Redirect::to('');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
