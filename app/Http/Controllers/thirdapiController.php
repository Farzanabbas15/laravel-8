<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class thirdapiController extends Controller
{
    //
    function postData(Request $req)
    {
        $device= new Device;
        $device->device=$req->device;
        $device->employee_id=$req->employee_id;
        $result = $device->save();
        if($result)
        {
            return ["result"=>"Done data has been save"];
        }
        else
        {
            return ["result"=>"operation failed"];
        }
    }

}
