<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otherData extends Model
{
    //
    protected $table = 'other_data';
	protected $fillable = [
	'product_id',
	'data_key',
	'data_value'
   ];
}
