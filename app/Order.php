<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
	protected $primaryKey = 'id';

    protected $fillable = [
        'product_id', 'weight', 
        'name', 'phone', 'address', 'note',
        'created_by', 'updated_by'
    ];

    public function product(){
    	return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function status(){
        return $this->hasOne('App\OrderStatus', 'id', 'status_id');
    }
}
