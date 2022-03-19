<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function users() 
    {
        return $this->belongsToMany('App\Models\User');
    }
    
    public function MessageChat() 
    {
        return $this->hasMany('App\Models\MessageChat');
    }

}

