<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    public $primaryKey = 'id_career';

    protected $table = 'career';

    const CREATED_AT = 'apllication_post';

    const UPDATED_AT = 'apllication_deadline';

    protected $fillable = [
        'id_career',
        'nama_career',
        'desc_career',
        'status',
        'published_career',
        'lokasi_career',
    ];

    protected $casts = [
        'published_career' => 'boolean',
        'viewers_count_career' => 'integer',
    ];
}
