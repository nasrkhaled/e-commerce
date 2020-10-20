<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{
	protected $table = 'shippings';
	protected $fillable = [
	'company_name_ar',
	'company_name_en',
	'user_id',
	'lat',
	'lng',
    'icon',
	];
    //
    public function shipping_owner()
    {
    	return $this->hasOne('App\User','id','user_id');
    }
}
