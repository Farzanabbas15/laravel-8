<?php

namespace App\Http\Controllers;

use App\Models\device;
use Illuminate\Http\Request;

class secondapiController extends Controller
{
    //get data from databse

    //function getData(){
     //   return device::all();
    //}

    //find specific data from database with api
    function getdata($id=null)
    {
        return $id?device::find($id):device::all(); 
    }

    
}
