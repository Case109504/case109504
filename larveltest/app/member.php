<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = [
		'member_name', 'birthday', 'gender', 'account', 'password',
	];
}
