<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumbotron extends Model
{
	protected $table = 'jumbotron';
	protected $primaryKey = 'id';

    protected $fillable = [
    	'id',
        'title', 'caption', 'image',
        'sumber_link', 'sumber_label'
    ];
}
