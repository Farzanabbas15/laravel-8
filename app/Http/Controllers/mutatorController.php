<?php

namespace App\Http\Controllers;

use App\Models\dat;
use App\Models\data;
use Illuminate\Http\Request;

class mutatorController extends Controller
{
    //
    function index(){
        $data = new data;
        $data->name="saboor";
        $data->email="saboor@gmail.com";
        $data->save();
    }
}
