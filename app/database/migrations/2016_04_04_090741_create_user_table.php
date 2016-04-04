<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prefix_users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name')->comment('First Name of the User.');
			$table->string('last_name')->comment('Last Name of the User.');
			$table->string('email')->comment('User Email Id.');
			$table->tinyInteger('email_status')->comment('Email Verified Status: 0 is Unverified and 1 is Verified.');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prefix_users');
	}

}
