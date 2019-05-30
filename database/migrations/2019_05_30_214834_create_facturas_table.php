<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facturas', function(Blueprint $table)
		{
			$table->integer('id_factura', true);
			$table->integer('numero_factura')->unsigned()->unique('numero_cotizacion');
			$table->dateTime('fecha_factura');
			$table->integer('id_cliente');
			$table->integer('id_vendedor');
			$table->string('condiciones', 30);
			$table->string('total_venta', 20);
			$table->boolean('estado_factura');
			$table->dateTime('fecha_vencimiento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facturas');
	}

}
