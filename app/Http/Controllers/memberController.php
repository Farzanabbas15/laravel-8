<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class memberController extends Controller
{
    function show(){
        $data =Member::all();
        return view('list',['members'=>$data]);   
    }

    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id)
    {
        $data = Member::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $data = Member::find($req->id);
        $data->name=$req->name;
        $data->age=$req->age;
        $data->email=$req->email;
        $data->save();
        return redirect('list');

    }

    function addData(Request $req)
    {
        $member = new Member;
        $member->sno=$req->sno;
        $member->name=$req->name;
        $member->age=$req->age;
        $member->email=$req->email;
        $member->save();
        return redirect('add');
    }

    function operations()
    {
        return DB::table('members')
        ->where('id',11)
        ->update([
            'name'=>'saad',
            'age'=>43,
            'email'=>'email.com'
        ]);
        
    }
    
}
