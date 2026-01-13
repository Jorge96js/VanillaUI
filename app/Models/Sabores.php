<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sabores extends Model
{
    protected $fillable = [
     'id',
     'nombre',
     'categoria',
    ];
    public $timestamps = false;
}
