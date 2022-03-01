<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $fillable = ['id','uuid','title','company_file'];

    /* Articulo de una determinada categoria */
    /*public function proessa()
    {
        return $this->belongsTo("App\Models\Proessa");
    }*/
}
