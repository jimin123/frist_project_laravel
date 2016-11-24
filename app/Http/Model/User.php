<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $FrimaryKey = 'Id';
    protected $Table = 'users';
    public $timestamps = true;
    protected $fillabe = 
    [   
        'Id',
        'FirstName',
        'LastName',
        'Username',
        'Password',
        'Address',
        'City',
        'State',
        'PostalCode',
        'Country',
        'Phone',
        'Email',
        'Avatar',
        'GroupId',
        'LoginIp',
        'LastLogin',
        'IsActive',
        'IsDeleted',
        'RememberToken',
        'CreatedAt',
        'UpdatedAt'
        ]

    public static function getList()
    {
    	return self::select()->paginate(3);
    }
}
