<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
	protected $table = 'manufacturers';
	protected $fillable = [
	'Manufact_name_ar','Manufact_name_en','facebook','twitter','website',
     'contact_name','lat','lng','icon','mobile','email','address',
	];
   
    //
}
