<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malls_Product extends Model
{
    //
    protected $table = 'malls__products';
	protected $fillable = [
	'product_id',
	'mall_id',
   ];


   public function Mall()
	{
		return $this->hasOne('\App\malls','id','mall_id');
	}
}
