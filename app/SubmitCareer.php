<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmitCareer extends Model
{
    protected $tabel = 'submit_careers';

    public $primaryKey = 'id_submit';

    const CREATED_AT = 'tanggal_dibuat';
}
