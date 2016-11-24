<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupAdministratorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_administrators', function (Blueprint $table) {
			$table->increments('Id');
			$table->string('Name', 30);
			$table->text('Image', 20);
			$table->string('ListRole', 50);
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
		Schema::drop('group_administrators');
	}
}
