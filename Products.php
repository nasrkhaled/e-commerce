<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{                  
    protected $table = 'products';
	protected $fillable = [
	'title',
	'content',
	'photo',
	'department_id',
	'brand_id',
	'manufacturer_id',
	'color_id',
	'size_id',
	'size',
	'currency_id',
	'price',
	'stock',
	'other_data',
	'wheight',
	'weight_id',
	'status',
	'reason',
	'start_at',
	'end_at',
	'price_offer',
	'start_offer_at',
	'end_offer_at',
	];

  public function related ()
   {
   	 return $this->hasMany('App\RelatedProducts','product_id','id');
   }

   public function product_Malls ()
   {
   	 return $this->hasMany('App\Malls_Product','product_id','id');
   }

	public function files()
	{
            return $this->hasMany('App\file','relation_id','id')
            ->where('file_type','products');
	}


	public function other_data()
	{
            return $this->hasMany('App\otherData','product_id','id');
	}

	public function mall_product()
	{
            return $this->hasMany('App\Malls_Product','mall_id','id');
	}

    //
}
