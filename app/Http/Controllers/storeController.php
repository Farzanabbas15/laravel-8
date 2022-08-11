<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    function storeM(Request $req){
        $data= $req->input('user');
        $req->session()->flash('user',$data);
        return redirect('store');
    }
}
