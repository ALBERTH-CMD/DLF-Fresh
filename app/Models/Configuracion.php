<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'seo_title',
        'seo_description',
        'seo_urlfoto',

        'colorPrimario',
        'colorSecundario',
        'urlfavicon',
        'urllogo',
        'slogan',
        'frase_1',
        'frase_2',
        'frase_3',

        'razonsocial',
        'direccion',
        'celular',
        'email',
        'facebook',
        'youtube'
    ];
}
