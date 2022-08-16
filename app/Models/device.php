<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device extends Model
{
    use HasFactory;
    public $timestamp=false;
}
function getDevice(){
    return $this->hasMany('App\Models\device');
}