<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class calculateController extends Controller
{
    //
    function operation()
    {
        return DB::table('members')->max('id');
    }
}
