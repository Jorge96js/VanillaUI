<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heladeria extends Model
{
    protected $fillable = [
        'Nombre',
        'Telefono',
        'Horarios',
        'Direccion',
        'Delivery',
        'Foto',
    ];
}
