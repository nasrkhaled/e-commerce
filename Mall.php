<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mall extends Model
{
	protected $table = 'malls';
	protected $fillable = [
	'Mall_name_ar',
	'Mall_name_en',
	'country_id',
	'facebook',
	'twitter',
	'website',
    'contact_name',
    'lat',
    'lng',
    'icon',
    'mobile',
    'email',
    'address',
	];
	public function country_id()
	{
		return $this->hasOne('\App\countries','id','country_id');
	}
    //
}
