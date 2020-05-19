<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    public $primaryKey = 'id';

    protected $table = 'carousel';

    const CREATED_AT = 'tanggal_dibuat';

    const UPDATED_AT = 'tanggal_diperbarui';

    protected $fillable = [
        'nama',
        'gambar'
    ];
}
