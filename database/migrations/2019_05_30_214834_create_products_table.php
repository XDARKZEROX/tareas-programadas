<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id_producto', true);
			$table->char('codigo_producto', 20)->unique('codigo_producto');
			$table->char('nombre_producto');
			$table->boolean('status_producto');
			$table->dateTime('date_added');
			$table->float('precio_producto', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
