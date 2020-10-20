<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
	protected $fillable = [
	'Size_name_ar',
	'Size_name_en',
	'department_id',
	'is_public',
	];


 //  public function department_id()
	// {
	// 	return $this->hasMany('App\department','id','department_id');
	// }
}
