<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
	protected $table = 'departments';
	protected $fillable = [
		'dep_name_ar',
		'dep_name_en',
		'description',
		'icon',
		'keyword',
		'parent_id',
	]; 
	public function parents ()
	{
		return $this->hasMany('App\department','id','parent_id');
	}
    //
}
