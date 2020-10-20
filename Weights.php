<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weights extends Model
{
	protected $table = 'Weights';
	protected $fillable = [
	'Weight_name_ar',
	'Weight_name_en',
	];
    //
}
