<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	protected $primaryKey = 'Id';
	protected $Table = 'users';
	public $timestamps = true;
	protected $fillable = 
	[	'Id',
		'Name',
		'Ordering',
		'ParentId',
		'CreatedAt',
		'UpdatedAt'
	]
	
	public function index()
	{
		//
	}
}
