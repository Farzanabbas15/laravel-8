<?php

namespace App\Http\Controllers;
use App\Models\mem;
use App\Models\employee;
use Illuminate\Http\Request;
use App\Models\device;

class memController extends Controller
{
    //
    function dev()
    {
        return employee::find(1)->getDevice;
    }
}
