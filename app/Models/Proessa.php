<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proessa extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'name',
    'email',
    'celular',
    'telefono',
    'direccion'];
}
