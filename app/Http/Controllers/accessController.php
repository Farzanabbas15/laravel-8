<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class accessController extends Controller
{
    //
    function aces(){
        return employee::all();
    }
}
