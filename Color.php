<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
	protected $table = 'colors';
	protected $fillable = [
	'Color_name_ar',
	'Color_name_en',
	'Color',
	
	];
    //
}
