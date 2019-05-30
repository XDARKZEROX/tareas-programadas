<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTmpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmp', function(Blueprint $table)
		{
			$table->integer('id_tmp', true);
			$table->integer('id_producto');
			$table->integer('cantidad_tmp');
			$table->float('precio_tmp')->nullable();
			$table->string('session_id', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tmp');
	}

}
