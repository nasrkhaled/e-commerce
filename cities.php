<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
	protected $table = 'cities';
	protected $fillable = [
		'city_name_ar',
		'city_name_en',
		'country_id',
	]; 
	public function country_id()
	{
		return $this->hasOne('\App\countries','id','country_id');
	} 

    //
}