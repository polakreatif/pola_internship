<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jumbotron extends Model
{
    public $primaryKey = 'id_jumbo';

    protected $table = 'jumbotron';

    const CREATED_AT = 'jumbo_dibuat';

    const UPDATED_AT = 'jumbo_diperbarui';

    protected $fillable = [
        'header',
        'konten',
        'link',
        'gambar_jumbo',
        'background',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
