<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('roles')->insert([
			['Name'      => str_random(3),
			 'CreatedAt'    => '9999-12-31 23:59:59',
			 'UpdatedAt'    => '9999-12-31 23:59:59'],
			['Name'      => str_random(3),
			 'CreatedAt'    => '9999-12-31 23:59:59',
			 'UpdatedAt'    => '9999-12-31 23:59:59']
		]);
	}
}
