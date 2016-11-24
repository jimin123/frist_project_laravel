<?php

use Illuminate\Database\Seeder;

class Group_administratorsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('group_administrators')->insert([
			['Name'      => str_random(3),
			 'Image'     => str_random(3),
			 'ListRole'  => str_random(5),
			 'CreatedAt' => '9999-12-31 23:59:59',
			 'UpdatedAt' => '9999-12-31 23:59:59'],
			['Name'      => str_random(3), 
			 'Image'     => str_random(3),
			 'ListRole'  => str_random(5),
			 'CreatedAt' => '9999-12-31 23:59:59',
			 'UpdatedAt' => '9999-12-31 23:59:59']
		]);
	}
}
