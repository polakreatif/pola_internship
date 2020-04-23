<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
	protected $primaryKey = 'id';

    protected $fillable = [
    	'id',
    	
        'app_name', 'app_slogan', 

    ];
}
