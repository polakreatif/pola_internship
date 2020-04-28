<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'slug', 'price', 'type', 'description', 
        'image', 'sumber_link', 'sumber_label',
        'created_by', 'updated_by'
    ];
}
