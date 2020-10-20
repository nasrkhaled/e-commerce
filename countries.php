<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
	protected $table = 'countries';
	protected $fillable = [
		'country_name_ar',
		'country_name_en',
		'mob',
		'code',
		'logo',
		'currency',
	]; 
    //

   public function Malls()
    {
    		return $this->hasMany('App\Mall','country_id','id');
    }
}
