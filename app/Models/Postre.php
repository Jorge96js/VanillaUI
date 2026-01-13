<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postre extends Model
{
    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion',
        'imagen_url',
        'precio'
    ];
    public $timestamps = false;
}
