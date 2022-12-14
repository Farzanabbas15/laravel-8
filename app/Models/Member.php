<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    
    use HasFactory;

    function employeeData()
    {
        return $this->hasOne('App\Models\employee');
    }
}
