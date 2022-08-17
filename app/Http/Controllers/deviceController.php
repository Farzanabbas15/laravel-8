<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class deviceController extends Controller
{
    //
    function index(device $key)
    {
        return $key->all();
    }
}
