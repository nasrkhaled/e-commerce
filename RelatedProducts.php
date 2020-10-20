<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelatedProducts extends Model
{
	protected $table = 'related_products';
	protected $fillable = [
	'product_id',
	'related_id',
		];
    //

	public function product ()
	{
		return $this->hasOne('App\Products','id','related_id');
	}
}
