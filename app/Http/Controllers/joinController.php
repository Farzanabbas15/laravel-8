<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    //
    function joins(){
        return DB::table('members')
        ->join('users','members.id','=','users.sno')
        ->where('members.id',1)
        ->select('members.name')
        ->get();

    }
}
