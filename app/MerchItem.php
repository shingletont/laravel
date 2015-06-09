<?php namespace App;


use Validator;
use Illuminate\Database\Eloquent\Model;

class MerchItem extends Model{

	public $timestamps = false;

	public static $rules = [
		'item_name' => 'required',
		'item_type' => 'required',
		'size' => 'required',
		'quantity_in_stock' => 'required',
		'last_stock_date' => 'required'

	];

	protected $fillable = ['item_name','item_type', 'size','quantity_in_stock', 'last_stock_date'];
	public $errors;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'merchitems';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */


	public function isValid()
	{
		$validator = Validator::make($this->attributes, static::$rules);

		if ($validator->passes())
			return true;
		

		$this->errors = $validator->messages();
		return false;

	}


}
