<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $primaryKey = 'id_artikel';

    protected $table = 'article';

    const CREATED_AT = 'tanggal_dibuat';

    const UPDATED_AT = 'tanggal_diperbarui';

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'viewers_count' => 'integer',
    ];
}