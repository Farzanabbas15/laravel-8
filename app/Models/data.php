<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    public $timestamp =false;
    public function setNameAttributes($value)
    {
        return $this->attributes['name']='Mr.'.$value;

    }
    public function setAddressAttributes($value)
    {
        return $this->attributes['address']=$value."karachi";

    }
}
