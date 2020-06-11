<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'nombre', 'ingredientes', 'preparacion','tipo','imagen','enlace_video',
    ];
}
