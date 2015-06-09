<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('merchitems', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_name');
			$table->string('item_type');
			$table->string('size');
			$table->integer('quantity_in_stock');
			$table->date('last_stock_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
			Schema::drop('merchitems;');
	}

}
