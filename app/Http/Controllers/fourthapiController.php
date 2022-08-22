<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
use Validator;

class fourthapiController extends Controller
{
    //
    function updateData(Request $req){
         $device=device::find($req->id);
         $device->device=$req->device;
         $device->employee_id=$req->employee_id;
         $result=$device->save();
         if($result)
         {
            return ["Result"=>"Data has been updated"];
         }
         else{
            return["Result"=>"Operation Failed"];
         }
    }

    function deleteData($id)
    {
        $device=device::find($id);
        $result=$device->delete();
        if($result){
        return ["restlt"=>"record has been deleted".$id];
        
        }
        else
        {
            return ["result"=>"operation failed"];
        }
    }

    function searchData($device)
    {
        return device::where("device","like","%".$device."%")->get();
    }

    function testData(Request $req)
    {
        $rules=array(
            "employee_id"=>"required"
        );
        $validator = Validator::make($req->all(),$rules());
        if($validator->fails())
        {
            return $validator->errors();
        }
        else 
        {
            $device= new device;
            $device->device=$req->device;
            $device->employee_id=$req->employee_id;
            $result=$device->save();  
            if($result)
         {
            return ["Result"=>"Data has been updated"];
         }
         else{
            return["Result"=>"Operation Failed"];
         } 
        }

    }
}
