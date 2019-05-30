<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->integer('id_cliente', true);
			$table->string('nombre_cliente')->unique('codigo_producto');
			$table->string('identificacion_fiscal');
			$table->char('telefono_cliente', 30);
			$table->string('email_cliente', 64);
			$table->string('direccion_cliente');
			$table->boolean('status_cliente');
			$table->dateTime('date_added');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
