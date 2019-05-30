<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('user_id', true)->comment('auto incrementing user_id of each user, unique index');
			$table->string('firstname', 20);
			$table->string('lastname', 20);
			$table->string('user_name', 64)->unique('user_name')->comment('user\'s name, unique');
			$table->string('user_password_hash')->comment('user\'s password in salted and hashed format');
			$table->string('user_email', 64)->unique('user_email')->comment('user\'s email, unique');
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
		Schema::drop('users');
	}

}
