<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'slug',
        'title',
        'description',
        'nombre',
        'descripcion',
        'urlfoto',
        'visitas',
        'orden'
    ];

    public function Producto(){
        return $this->hasMany("App\Models\Producto");
    }

    public function Post(){
        return $this->hasMany("App\Models\Post");
    }
}
