<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\user;
class UserController extends Controller
{
    //making of controller
    //php artisan make:controller UserController
    //function show($id){
    //    return $id;
    //}
   // function loadView()
    //{
       // return view("users",["name"=>"ahmed"]);

      //  $data=["farzan","ahmed","saboor"];
        //return view("users",["users"=>$data]);

    //}

   // function index()
    //{
    //    return DB::select("select * from users");
    //}


   // function getData()
    //{
    //    return user::all();
    //}

   // function index()
    //{
     //   $data= Http::get("https://reqres.in/api/users?page=1");
     //   return view('emp',['collection'=>$data['data']]);
    //}
    function testRequest(Request $req)
    {
        return $req->input();
    }
}
