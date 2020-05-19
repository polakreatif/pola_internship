<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $primaryKey = 'id_product';

    protected $table = 'produk';

    const CREATED_AT = 'product_dibuat';

    const UPDATED_AT = 'product_diperbarui';

    protected $fillable = [
        'id_product',
        'name_product',
        'desc_product',
        'link',
        'is_published',
        'lokasi_career',
    ];

    protected $casts = [
        'published_career' => 'boolean',
    ];
}
