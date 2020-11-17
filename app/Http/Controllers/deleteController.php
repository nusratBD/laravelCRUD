<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class deleteController extends Controller
{
    function showData(){
        $data=user::all();
        return view('delete',['data'=>$data]);
    }
    public function deleteData($id){
        $data=user::find($id);
        $data->delete();
        return redirect('data');

        
    }
    public function updateData($id){
        $data=user::find($id);
        return view('update',['data'=>$data]);

        
    }
    public function updateSuccess(Request $req){
        $user=user::find($req->id);
        $user->name=$req->name;
        $user->email=$req->email;
       
        $user->save();
        return redirect('data');
}
}
