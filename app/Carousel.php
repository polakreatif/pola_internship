<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';
	protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'caption', 'image',
        'sumber_link', 'sumber_label'
    ];
}
