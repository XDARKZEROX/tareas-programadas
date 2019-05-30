<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleFacturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_factura', function(Blueprint $table)
		{
			$table->integer('id_detalle', true);
			$table->integer('numero_factura');
			$table->integer('id_producto');
			$table->integer('cantidad');
			$table->float('precio_venta', 10, 0);
			$table->index(['numero_factura','id_producto'], 'numero_cotizacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_factura');
	}

}
