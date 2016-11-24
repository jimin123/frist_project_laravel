<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('users', function (Blueprint $table) {
			$table->increments('Id');
			$table->string('FirstName', 30);
			$table->string('LastName', 30);
			$table->string('Username', 10);
			$table->string('Password');
			$table->string('Address', 100);
			$table->string('City', 10);
			$table->string('State', 10);
			$table->mediumInteger('PostalCode');
			$table->string('Country', 10);
			$table->bigInteger('Phone');
			$table->string('Email', 50);
			$table->text('Avatar');
			$table->integer('GroupId');
			$table->string('LoginIp', 20);
			$table->timestamp('LastLogin');
			$table->boolean('IsActive');
			$table->boolean('IsDeleted');
			$table->string('RememberToken', 20);
			$table->datetime('CreatedAt');
			$table->datetime('UpdatedAt');
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
