<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
	protected $primaryKey = 'id';

    protected $fillable = [
        'product_id', 'weight', 
        'name', 'phone', 'address', 'note'
    ];

    public function product(){
    	return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
