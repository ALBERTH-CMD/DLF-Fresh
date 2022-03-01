<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [

        'title',
        'description',
        'somos',
        'urlsomos',
        'historia',
        'urlhistoria',
        'mision',
        'urlmision',
        'vision',
        'urlvision',
        'valores',
        'urlvalores',
    ];
}
