<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			['FirstName'    => str_random(3),
			 'LastName'     => str_random(3),
			 'Username'     => str_random(5),
			 'password'     => bcrypt('secret'),
			 'Address'      => str_random(5),
			 'City'         => str_random(5),
			 'State'        => str_random(5),
			 'PostalCode'   => '840000',
			 'Country'      => str_random(5),
			 'Phone'        => '0919892642',
			 'email'        => str_random(5).'@gmail.com',
			 'Avatar'       => str_random(5),
			 'GroupId'      => 1,
			 'LoginIp'      => str_random(5),
			
			 'IsActive'     => 0,
			 'IsDeleted'    => 0,
			 'RememberToken'=> str_random(10),
			 'CreatedAt'    => '9999-12-31 23:59:59',
			 'UpdatedAt'    => '9999-12-31 23:59:59'],
			['FirstName'    => str_random(3),
			 'LastName'     => str_random(3),
			 'Username'     => str_random(5),
			 'password'     => bcrypt('secret'),
			 'Address'      => str_random(5),
			 'City'         => str_random(5),
			 'State'        => str_random(5),
			 'PostalCode'   => '840000',
			 'Country'      => str_random(5),
			 'Phone'        => '0919892642',
			 'email'        => str_random(5).'@gmail.com',
			 'Avatar'       => str_random(5),
			 'GroupId'      => 1,
			 'LoginIp'      => str_random(5),
			
			 'IsActive'     => 0,
			 'IsDeleted'    => 0,
			 'RememberToken'=> str_random(10),
			 'CreatedAt'    => '9999-12-31 23:59:59',
			 'UpdatedAt'    => '9999-12-31 23:59:59'],
		]);
	}
}
