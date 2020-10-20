<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';
	protected $fillable = [
		'brand_name_ar',
		'brand_name_en',
		'logo'
	]; 
    //
}
