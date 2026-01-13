<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Torta extends Model
{
    protected $fillable = [
        'nombre',
        'categoria',
        'imagen'
    ];
    public $timestamps = false;

}
