<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfil', function(Blueprint $table)
		{
			$table->integer('id_perfil', true);
			$table->string('nombre_empresa', 150);
			$table->string('direccion');
			$table->string('ciudad', 100);
			$table->string('codigo_postal', 100);
			$table->string('estado', 100);
			$table->string('telefono', 20);
			$table->string('email', 64);
			$table->integer('impuesto');
			$table->string('moneda', 6);
			$table->string('logo_url');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perfil');
	}

}
