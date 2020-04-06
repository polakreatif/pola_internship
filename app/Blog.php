<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';

    protected $fillable = [
        "title", "description", 
        "mediaUrl", "categoryId"
    ];

    protected $attributes = [
        
    ];

    public function category(){
        return $this->belongsTo('App\Category', 'id');
    }
}
