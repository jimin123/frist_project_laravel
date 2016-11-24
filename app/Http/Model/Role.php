<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $FrimaryKey = 'Id';
	protected $Table = 'roles';
	public $timestamps = true;
	protected $fillabe = 
	[
		'Id',
		'Name',
		'CreatedAt',
		'UpdatedAt'
	];
	
	
	public function index()
	{
		//
	}
}
