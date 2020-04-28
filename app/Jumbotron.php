<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumbotron extends Model
{
	protected $table = 'jumbotron';
	protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'caption', 'image',
        'sumber_link', 'sumber_label',
        'updated_by'
    ];
}
