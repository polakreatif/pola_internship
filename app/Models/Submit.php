<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    public $primaryKey = 'id';

    protected $table = 'submit';

    const CREATED_AT = 'tanggal_dibuat';

    const UPDATED_AT = 'tanggal_diperbarui';

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'gambar',
        'cv',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'viewers_count' => 'integer',
    ];
}
