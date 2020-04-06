<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = ["name"];
   
    protected $attributes = [
        
    ];

    public function blog(){
        $this->hasMany('App\Blog', 'categoryId');
    }

}
