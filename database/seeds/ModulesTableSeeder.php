<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('modules')->insert([
			['Name'      => str_random(3),
			 'Ordering'  => str_random(3),
			 'ParentId'  => str_random(5),
			 'CreatedAt'    => '9999-12-31 23:59:59',
			 'UpdatedAt'    => '9999-12-31 23:59:59'],
			['Name'      => str_random(3),
			 'Ordering'  => str_random(3),
			 'ParentId'  => str_random(5),
			 'CreatedAt'    => '9999-12-31 23:59:59',
			 'UpdatedAt'    => '9999-12-31 23:59:59'],
		]);
	}
}
