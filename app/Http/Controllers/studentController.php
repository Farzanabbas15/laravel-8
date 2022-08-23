<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\device;
use App\Models\student;

class studentController extends Controller
{
    //
    function list()
    {
        //return DB::table('devices')->get();
        //return DB::connection('mysql2')->table('students')->get();
        //return device::all();
        return student::all();

    }
}
