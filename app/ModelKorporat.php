<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKorporat extends Model
{
    //
    protected $table ='isian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rt', 
        'desa',
        'kecamatan',
        'laporan'
    ];
}
