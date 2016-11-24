<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modules', function (Blueprint $table) {
			$table->increments('Id');
			$table->string('Name', 30);
			$table->string('Ordering', 30);
			$table->string('ParentId', 10);
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
		Schema::drop('modules');
	}
}
