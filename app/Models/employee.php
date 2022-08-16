<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    function getNameAttribute($value)
    {
        return ucFirst($value);
    }
    function getEmailAttribute($value)
    {
        return $value."email.com";
    }







    
    //one to many relation
    function getDevice(){
        return $this->hasMany('App\Models\device');
    }
}
