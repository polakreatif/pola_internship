<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $primaryKey = 'id_company';

    protected $table = 'company';

    const CREATED_AT = 'tanggal_dibuat';

    const UPDATED_AT = 'tanggal_diperbarui';

    protected $fillable = [
        'id_company',
        'nama',
        'slogan',
        'short_about',
        'about',
    ];
}
