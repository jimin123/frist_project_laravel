<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Group_administrator extends Model
{
	protected $FrimaryKey = 'Id';
	protected $Table = 'users';
	public $timestamps = true;
	protected $fillabe = 
	[	
		'Id',
		'Name',
		'Image',
		'ListRole',
		'CreatedAt',
		'UpdatedAt'
	]
	
	public function index()
	{
		//
	}
}
